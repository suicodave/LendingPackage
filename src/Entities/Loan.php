<?php

namespace davedev\Lending\Entities;

class Loan extends Model
{
    protected $fillable = [
        'customer_id',
        'principal_amount',
        'term',
        'annual_interest_rate',
        'user_id'
    ];
}
