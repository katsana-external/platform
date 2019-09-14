<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchestra\Extension\Concerns\DomainAware;
use Orchestra\Model\HS;

class AppServiceProvider extends ServiceProvider
{
    use DomainAware;

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        // HS::override('User', 'App\User');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
