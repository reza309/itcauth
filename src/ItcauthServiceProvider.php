<?php

namespace ITC\Itcauth;

use Illuminate\Support\ServiceProvider;

class ItcauthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('ITC\Itcauth\HomeController');
        $this->loadViewsFrom(__DIR__.'/views','itcauth');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
