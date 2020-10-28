<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dish;
use Faker\Generator as Faker;

$factory->define(Dish::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'price' => $faker->numberBetween(50,300),
        'Description'=> $faker->sentence(6),
        'Calorie'=> $faker->numberBetween(50,300),
        'image' => $faker->imageUrl($width = 640, $height = 480,'food'),
        
    ];
});
