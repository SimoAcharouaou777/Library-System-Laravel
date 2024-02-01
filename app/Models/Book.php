<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'genre',
        'author',
        'description',
        'publication_year',
        'total_copies',
        'available_copies',
        'image'
    ];
}
