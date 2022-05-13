<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        
        'title' => $faker->text,
        'genre' => $faker->text,
        'language' => $faker->text,
        'vote' => $faker->numberBetween(1,5),
        'cover' => "https://picsum.photos/1200/350?random=". rand(1, 55000),
        
    ];
});
