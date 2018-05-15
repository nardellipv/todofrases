<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category' => $faker->jobTitle,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'phrase_id' => rand(1, 20),
    ];
});
