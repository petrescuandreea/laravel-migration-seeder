<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(60),
        'date_of_release' => $faker -> date(),
        'produced_by' => $faker -> name(60),
        'views'=> $faker -> numberBetween(),
        'sales' => $faker -> numberBetween(),
        'cover' => $faker -> imageUrl(360, 360, 'animals', true, 'dogs', true)
    ];
});
