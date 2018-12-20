<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'book_id' => function () {
            return factory('App\Book')->create()->id;
        },
        'body' => $faker->paragraph,
    ];
});
