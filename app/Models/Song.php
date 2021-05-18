<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'title',
        'album',
        'autor',
        'genere',
        'duration',
        'date',
        'available'
    ];
}
