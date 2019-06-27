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
$factory->define(App\Models\Portfolio::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\Youtube($faker));

    return [
        'title' => $faker->words(3, true),
        'text' => $faker->paragraphs(3, true),
        'url' => $faker->youtubeEmbedUri(),
        'active' => rand(0,1),
    ];
});
