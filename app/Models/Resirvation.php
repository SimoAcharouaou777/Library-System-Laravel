<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resirvation extends Model
{
    use HasFactory;
    protected $fillable=['id_book',	'id_user',	'date_start',	'date_end'];
}
