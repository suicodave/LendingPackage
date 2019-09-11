<?php

namespace davedev\Lending\Repositories;

use davedev\Lending\Entities\PaymentFrequency;

class PaymentFrequencyRepository
{
    private $paymentFrequency;

    function __construct(PaymentFrequency $paymentFrequency)
    {
        $this->paymentFrequency = $paymentFrequency;
    }

    function create($attributes)
    {
        $paymentFrequency = $this->paymentFrequency->create($attributes);

        return $paymentFrequency;
    }

    function update($id, $attributes)
    {
        $paymentFrequency = $this->paymentFrequency->find($id);

        $paymentFrequency->update($attributes);

        return $paymentFrequency;
    }

    function delete($id)
    {
        $paymentFrequency = $this->paymentFrequency->find($id);

        $paymentFrequency->delete();

        return $paymentFrequency;
    }
}
