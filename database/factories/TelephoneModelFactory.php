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
$factory->define(App\Models\Telephone::class, function (Faker\Generator $faker) {
    static $password;
    
    $faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

    return [
        'name' => $faker->word(),
        'telephone' => $faker->cellphoneNumber,
        'whatsapp' => rand(0,1),
        'active' => rand(0,1),
    ];
});
