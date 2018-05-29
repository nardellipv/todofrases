<?php

use Faker\Generator as Faker;
use App\Photo;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'name' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'status' => $faker->randomElement($array = array('APPROVED', 'PENDING', 'REJECTED')),
        'user_id' => rand(1, 20),
    ];
});
