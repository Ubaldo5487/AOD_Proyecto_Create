<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cake extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'client_name',
        'client_direction',
        'ingredient',
        'taste',
        'quantity',
        'size',
        'description',
        'comment',
        'available'
    ];
}
