<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title' => $faker -> words(3, true),
        'date_of_release' => $faker -> date(),
        'produced_by' => $faker -> name(60),
        'views'=> $faker -> randomNumber(3),
        'sales' => $faker -> randomNumber(3),
        'cover' => $faker -> imageUrl(360, 360, 'animals', true, 'dogs', true)
    ];
});
