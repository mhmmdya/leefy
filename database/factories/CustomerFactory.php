<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'postal_code' => rand(1000, 9999) . " " . strtoupper(chr(64+rand(0, 26))) . strtoupper(chr(64+rand(0, 26))),
        'city' => $faker->city,
        'phone_number' => "06" . rand(10000000, 99999999),
        'mobile_number' => "035" . rand(10000000, 99999999),
        'api_token' => str_random(10),
    ];
});
