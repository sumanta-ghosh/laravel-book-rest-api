<?php

use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'rating' => $faker->randomDigitNotNull(0, 5)
    ];
});
