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
$factory->define(App\Models\Ebook::class, function (Faker\Generator $faker) {

    return [
        'image' => $faker->imageUrl,
        'title' => $faker->word,
        'description' => $faker->text(rand(100,200)),
        'landing_page_id' => rand(1,5),
        'active' => 1,
    ];
});