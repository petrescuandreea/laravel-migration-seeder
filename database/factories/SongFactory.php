<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'duration' => $faker -> numberBetween(30, 600),
        'lyrics' => $faker -> text(300),
        'price' => $faker -> numberBetween(500, 10000),
        'genre' => $faker -> word(),
        'rating' => $faker -> numberBetween(0, 10),
        'explicit' => $faker -> boolean(),
        'single' => $faker -> boolean()
    ];
});
