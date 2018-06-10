<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'description' => $faker->text,
    ];
});
