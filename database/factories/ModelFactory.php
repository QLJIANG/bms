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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'password' => bcrypt(123456),
    ];
});

$factory->define(App\Models\Bms::class, function (Faker\Generator $faker) {
    return [
        'mac' => 'AA-BB-CC-DD-EE-' . $faker->randomDigit . strtoupper($faker->randomLetter),
    ];
});

$factory->define(App\Models\Bat::class, function (Faker\Generator $faker) {
    $bmsIds = \App\Models\Bms::lists('id')->toArray();
    return [
        'bms_id' => $faker->randomElement($bmsIds),
        'factory' => $faker->company,
    ];
});

$factory->define(App\Models\BmsUser::class, function (Faker\Generator $faker) {
    $bmsIds = \App\Models\Bms::lists('id')->toArray();
    $userIds = \App\Models\User::lists('id')->toArray();
    return [
        'bms_id' => $faker->randomElement($bmsIds),
        'user_id' => $faker->randomElement($userIds),
    ];
});

$factory->define(App\Models\BmsData::class, function (Faker\Generator $faker) {
    $bmsIds = \App\Models\Bms::lists('id')->toArray();
    return [
        'bms_id' => $faker->randomElement($bmsIds),
        'soc' => $faker->randomFloat(2, 0, 100),
        'soh' => $faker->randomFloat(0, 1, 100),
        'vol' => $faker->randomFloat(2, 0, 220),
        'res' => $faker->randomFloat(2, 100, 2000),
        'longitude' => $faker->randomFloat(6, -180,180),
        'latitude' => $faker->randomFloat(6, 0, 360),
        'altitude' => $faker->randomFloat(2, 0, 200),
        'speed' => $faker->randomFloat(2, 0, 100),
        'locate_mode' => $faker->randomElement([1, 2, 3]),
        'satellite' => $faker->randomFloat(0, 3, 12),
        'temp' => $faker->randomFloat(2, -10, 30),
        'current' => $faker->randomFloat(2, 0, 5),
        'charge' => $faker->randomElement([0, 1, 2]),
    ];
});

$factory->define(App\Models\BatData::class, function (Faker\Generator $faker) {
    $batIds = \App\Models\Bat::lists('id')->toArray();
    return [
        'bat_id' => $faker->randomElement($batIds),
        'soc' => $faker->randomFloat(2, 0, 100),
        'soh' => $faker->randomFloat(0, 1, 100),
        'vol' => $faker->randomFloat(2, 0, 220),
        'res' => $faker->randomFloat(2, 100, 2000),
    ];
});