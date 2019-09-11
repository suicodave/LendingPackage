<?php

namespace davedev\Lending\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentFrequency extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'months_per_installment',
        'user_id'
    ];

    protected $table = 'lending_payment_frequencies';
}
