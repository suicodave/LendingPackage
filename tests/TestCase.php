<?php

namespace davedev\Lending\Tests;

use davedev\Lending\LendingServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected $loanRepository;
    protected $paymentFrequencyRepository;

    protected function getPackageProviders($app)
    {
        return [
            LendingServiceProvider::class
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__ . '/../database/factories');

        $this->loanRepository = $this->app->make('davedev\Lending\Repositories\LoanRepository');

        $this->paymentFrequencyRepository = $this->app->make('davedev\Lending\Repositories\PaymentFrequencyRepository');
    }
}
