<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'surname'=> $faker -> lastName(),
        'stagename' => $faker -> name(),
        'date_of_birth' => $faker -> date(),
        'genre' => $faker -> word(),
        'website' => $faker -> url(),
        'record_label' => $faker -> name(),
        'bio' => $faker -> paragraph()
    ];
});
