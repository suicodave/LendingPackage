<?php

use davedev\Lending\Entities\PaymentFrequency;

$factory->define(PaymentFrequency::class, function (Faker\Generator $faker) {
    return [
        'name' => array_rand(array('Monthly', 'BiMonthly', 'Quarterly', 'SemiAnnual', 'Annual')),
        'months_per_installment' => $faker->numberBetween(1, 24),
        'user_id' => $faker->numberBetween(0, 99999),
    ];
});
