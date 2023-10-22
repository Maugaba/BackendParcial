<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Barryvdh\Cors\HandleCors;

class CorsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HandleCors::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
