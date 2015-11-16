<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.usermenu', 'App\Http\Composers\NavigationComposer@usermenu');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Don't delete that it is part of the interface
    }
}
