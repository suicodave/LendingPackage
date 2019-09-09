<?php

namespace davedev\Lending;

use Illuminate\Support\ServiceProvider;

class LendingServiceProvider extends ServiceProvider
{
    function boot()
    {
        $this->registerResources();
    }

    function register()
    { }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
