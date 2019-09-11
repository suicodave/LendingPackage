<?php

namespace davedev\Lending\Tests\Feature;

use davedev\Lending\Entities\PaymentFrequency;
use davedev\Lending\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaymentFrequencyTest extends TestCase
{
    use RefreshDatabase;

    const Table_NAME = 'lending_payment_frequencies';

    /**
     * @test
     */
    function canCreateFromFactory()
    {
        $paymentFrequency = factory(PaymentFrequency::class)->create();

        $this->assertDatabaseHas(self::Table_NAME, $paymentFrequency->toArray());
    }

    /**
     * @test
     */
    function canCreateFromRepository()
    {
        $paymentFrequencyAttributes = factory(PaymentFrequency::class)->make()->toArray();

        $paymentFrequency = $this->paymentFrequencyRepository->create($paymentFrequencyAttributes);

        $this->assertDatabaseHas(self::Table_NAME, $paymentFrequency->toArray());
    }

    /**
     * @test
     */
    function canUpdatePaymentFrequency()
    {
        $paymentFrequencyAttributes = factory(PaymentFrequency::class)->make()->toArray();

        $updatedPaymentFrequencyAttributes = factory(PaymentFrequency::class)->make()->toArray();

        $paymentFrequency = $this->paymentFrequencyRepository->create($paymentFrequencyAttributes);

        $updatedPaymentFrequency = $this->paymentFrequencyRepository->update($paymentFrequency->id, $updatedPaymentFrequencyAttributes);

        $this->assertDatabaseMissing(self::Table_NAME, $paymentFrequency->toArray())
            ->assertDatabaseHas(self::Table_NAME, $updatedPaymentFrequency->toArray());
    }

    /**
     * @test
     */
    function canDeletePayment()
    {
        $paymentFrequencyAttributes = factory(PaymentFrequency::class)->make()->toArray();

        $paymentFrequency = $this->paymentFrequencyRepository->create($paymentFrequencyAttributes);

        $paymentFrequency = $this->paymentFrequencyRepository->delete($paymentFrequency->id);

        $this->assertSoftDeleted(self::Table_NAME, $paymentFrequency->toArray());
    }
}
