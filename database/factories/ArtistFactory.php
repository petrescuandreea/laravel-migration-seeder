<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'surname'=> $faker -> lastName(),
        'stagename' => $faker -> userName(),
        'date_of_birth' => $faker -> date(),
        'genre' => $faker -> word(),
        'website' => $faker -> url(),
        'record_label' => $faker -> sentence(3),
        'bio' => $faker -> paragraph()
    ];
});
