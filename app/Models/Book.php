<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\resirvation;

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
    public function resirvations()
    {
        return $this->hasMany(Resirvation::class);
    }
}
