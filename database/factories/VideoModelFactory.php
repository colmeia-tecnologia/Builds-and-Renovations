<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Video::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->words(3, true),
        'description' => $faker->words(3, true),
        'url' => $faker->url(),
        'image' => $faker->imageUrl(800, 600, 'abstract', true, 'Imagem Ilustrativa', true),
    ];
});
