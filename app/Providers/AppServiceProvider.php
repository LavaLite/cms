<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(public_path('themes/admin/views'), 'admin');
        $this->loadViewsFrom(public_path('themes/public/views'), 'public');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
