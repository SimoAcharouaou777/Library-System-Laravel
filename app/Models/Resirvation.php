<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\User;

class Resirvation extends Model
{
    use HasFactory;
    protected $fillable=['id_book',	'id_user',	'date_start',	'date_end'];
    
    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'id_book');
    }
    
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
    
}
