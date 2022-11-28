<?php

namespace Rexpoit\Location;

use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    //    $this->app->make('Rexpoit\Location\Controllers\UserController');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'./routes/web.php');
        $this->loadViewsFrom(__DIR__.'./views', 'location');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}