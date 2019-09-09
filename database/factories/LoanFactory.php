<?php

use davedev\Lending\Entities\Loan;

$factory->define(Loan::class, function (Faker\Generator $faker) {
    return [
        'customer_id' => $faker->randomNumber(),
        'principal_amount' => $faker->randomNumber(5),
        'term' => $faker->numberBetween(1, 60)
    ];
});
