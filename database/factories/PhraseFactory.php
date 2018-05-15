<?php

use Faker\Generator as Faker;
use App\Phrase;

$factory->define(Phrase::class, function (Faker $faker) {
    return [
        'text' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'author' => $faker->name,
        'category_id' => rand(1, 10),
        'user_id' => rand(1, 20),
    ];
});
