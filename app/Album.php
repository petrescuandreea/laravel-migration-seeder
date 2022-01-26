<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        'title',
        'date_of_release',
        'produced_by',
        'views',
        'sales',
        'cover'
    ];
}
