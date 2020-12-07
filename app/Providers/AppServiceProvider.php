<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('user', function ($app) {
            return $this->app->make('Litepie\User\User');
        });

        // Bind User to repository
        $this->app->bind(
            'App\Interfaces\User\UserRepositoryInterface',
            \App\Repositories\User\Eloquent\UserRepository::class
        );

        // Bind User to repository
        $this->app->bind(
            'App\Interfaces\User\ClientRepositoryInterface',
            \App\Repositories\User\Eloquent\ClientRepository::class
        );

        $this->app->register(RouteServiceProvider::class);
        $this->app->register(\Laravel\Socialite\SocialiteServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        return ['user'];
    }
}
