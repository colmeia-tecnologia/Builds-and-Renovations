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
$factory->define(App\Models\LandingPage::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->word,
        'image' => $faker->imageUrl,
        'description' => $faker->text(rand(100,200)),
        'text' => $faker->text(rand(100,200)),
        'form_title' => $faker->sentence(rand(1,3)),
        'form' => $faker->text(rand(100,200)),
    ];
});