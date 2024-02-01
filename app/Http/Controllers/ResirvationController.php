<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resirvation;
use Illuminate\Support\Facades\Auth;

class ResirvationController extends Controller
{
    //
    public function reserver(Request $request){
          
        $request->validate([
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date', 'after_or_equal:startDate'],
        
        ]);

      

        $available = Resirvation::where('id_book', $request->book_id)
                ->where('date_start', '<=', $request->endDate)
                ->where('date_end', '>=', $request->startDate)
                ->count() == 0;

        if ($available) {
            Resirvation::create([
                'id_book' => $request->book_id,
                'id_user' => Auth::id(),
                'date_start' => $request->startDate,
                'date_end' => $request->endDate,
               
            ]);

            return redirect("/detail/$request->book_id");
        } else {
            return ' already reserved ';
        }

        
    }
}
