<?php

namespace Vendor\ExamplePackage;

use Illuminate\Support\ServiceProvider;

class ExamplePackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        //
    }
}