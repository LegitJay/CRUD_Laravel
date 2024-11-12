<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Validator::extend('requires', function ($attribute, $value, $parameters, $validator) {
            // Custom validation logic
            return !empty($value); // Example: make sure the value is not empty
        });
    }
}
