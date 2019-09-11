<?php

use davedev\Lending\Entities\Loan;

$factory->define(Loan::class, function (Faker\Generator $faker) {
    return [
        'customer_id' => $faker->randomNumber(),
        'principal_amount' => $faker->randomFloat(2, 1, 1000000000),
        'term' => $faker->numberBetween(1, 60),
        'annual_interest_rate' => $faker->randomFloat(2, 0, 50),
        'user_id' => $faker->numberBetween(0, 99999),
        'branch_id' => $faker->hexColor
    ];
});
