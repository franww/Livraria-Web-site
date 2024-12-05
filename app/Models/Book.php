<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Defina os campos que são atribuíveis em massa
    protected $fillable = [
        'title',
        'author',
        'price',
        'image',
        'category',
    ];
}
