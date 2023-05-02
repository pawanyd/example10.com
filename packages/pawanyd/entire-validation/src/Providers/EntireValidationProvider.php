<?php

namespace Pawanyd\EntireValidation\Providers;

use Illuminate\Support\ServiceProvider;

class EntireValidationProvider extends ServiceProvider
{
    public function register()
    {
        // Register your package's services and dependencies here
    }

    public function boot(): void
    {
        // Bootstrap any package-specific functionality here
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}