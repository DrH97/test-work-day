<?php

/** @var Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'description' => $faker->text,
        'likes' => $faker->numberBetween($min = 0, $max = 999),
        'views' => $faker->numberBetween($min = 0, $max = 9999)
    ];
});
