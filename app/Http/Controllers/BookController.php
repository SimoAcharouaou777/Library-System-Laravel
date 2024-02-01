<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    
    public function show(){
        $books = Book::all();
        return view('admin.book', ['books' => $books]);
    }

    public function store(Request $request)
    {
        // dd($request);
       $data = $request->validate([
        'title' => 'required|string|max:30',
        'genre' => 'required|string|max:30',
        'author' => 'required|string',
        'description' => 'required|string',
        'publication_year' => 'required',
        'total_copies' => 'required|integer|min:1',
        'available_copies' =>  'required|integer',
       
       ]);
    
        
       
        $newbook = Book::create($data);
        return redirect(route('show.book'));
    }

    public function delete($id)
    {
        Book::find($id)->delete();
        return redirect()->route('show.book');
    }

    public function update(Request $request, Book $book)
    {
        // dd($request);
        $data = $request->validate([

        'title' => 'required|string|max:30',
        'genre' => 'required|string|max:30',
        'author' => 'required|string',
        'description' => 'required|string',
        'publication_year' => 'required',
        'total_copies' => 'required|integer|min:1',
        'available_copies' =>  'required|integer',
        ]);
      
        $book->update($data);
        return redirect()->route('show.book');
    }
}
