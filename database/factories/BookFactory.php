<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'isbn' => $faker->numerify('###-#-####'),
        'year' => $faker->year,
        'blurb' => $faker->paragraph,
    ];
});
