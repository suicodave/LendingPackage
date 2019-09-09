<?php

namespace davedev\Lending\Tests;

use davedev\Lending\LendingServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LendingServiceProvider::class
        ];
    }
}
