<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(public_path(config('theme.themeDir').'/'.config('theme.themes.admin.theme').'/views'), 'admin');
        $this->loadViewsFrom(public_path(config('theme.themeDir').'/'.config('theme.themes.public.theme').'/views'), 'public');
        $this->loadViewsFrom(public_path(config('theme.themeDir').'/'.config('theme.themes.user.theme').'/views'), 'user');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
