<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'uuid' => str_random(10),
        'minimum_rating' => round(rand(10, 50) / 10, 1),
        'customer_id' => function () {
            return factory(App\Customer::class)->create()->id;
        },
        'professional_id' => null,
        'order_type_id' => rand(1, 2),
        'priority_status_id' => 1,
        'order_status_id' => 1,
    ];
});
