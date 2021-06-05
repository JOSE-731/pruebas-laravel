<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

        //Se crearan 4 usuarios por eso usamos random del 1 al 4
        'user_id' => rand(1,4),
        'titulo' => $faker->sentence,
        'descripcion' => $faker->sentence
    ];
});
