<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        
        'name',
        'surname',
        'stagename',
        'date_of_birth',
        'genre',
        'website',
        'record_label',
        'bio'
    ];
}
