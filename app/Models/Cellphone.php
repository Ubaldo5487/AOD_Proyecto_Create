<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellphone extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'brand',
        'model',
        'color',
        'camNumber',
        'rearCamera_px',
        'frontalCamera_px',
        'screenSize',
        'screenResolution',
        'memory',
        'ram',
        'typeOfSystem',
        'systemVersion',
        'batteryCapacity',
        'loadingspeed',
        'description',
        'comment',
        'available'
    ];
}
