<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'title',
        'duration',
        'lyrics',
        'price',
        'genre',
        'rating',
        'explicit',
        'single'
    ];
}
