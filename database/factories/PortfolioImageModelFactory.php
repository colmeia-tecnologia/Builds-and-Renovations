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
$factory->define(App\Models\PortfolioImage::class, function (Faker\Generator $faker) {

    return [
        'portfolio_id' => rand(1,6),
        'image' => $faker->imageUrl(800, 600, 'city', true, 'Fake Image', false),
        'title' => $faker->words(2, true),
        'description' => $faker->words(10, true),
        'order' => rand(1,10),
    ];
});