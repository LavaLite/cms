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

        $this->registerRepositoryBibdings();
        $this->registerFacades();
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(\Laravel\Socialite\SocialiteServiceProvider::class);
    }

    public function registerRepositoryBibdings()
    {
        $this->app->bind(
            'Litepie\User\Interfaces\UserRepositoryInterface',
            \App\Repositories\Eloquent\UserRepository::class
        );
        $this->app->bind(
            'Litepie\User\Interfaces\ClientRepositoryInterface',
            \App\Repositories\Eloquent\ClientRepository::class
        );
        $this->app->bind(
            'Litepie\Roles\Interfaces\RoleRepositoryInterface',
            \App\Repositories\Eloquent\RoleRepository::class
        );
        $this->app->bind(
            'Litepie\Roles\Interfaces\PermissionRepositoryInterface',
            \App\Repositories\Eloquent\PermissionRepository::class
        );
        $this->app->bind(
            'Litepie\Master\Interfaces\MasterRepositoryInterface',
            \App\Repositories\Eloquent\MasterRepository::class
        );
        $this->app->bind(
            'Litepie\Settings\Interfaces\SettingRepositoryInterface',
            \App\Repositories\Eloquent\SettingRepository::class
        );
        $this->app->bind(
            'Litepie\Team\Interfaces\TeamRepositoryInterface',
            \App\Repositories\Eloquent\TeamRepository::class
        );
    }

    public function registerFacades()
    {
        $this->app->bind('app.user', function ($app) {
            return $this->app->make(\App\Litepie\User::class);
        });
        $this->app->bind('app.role', function ($app) {
            return $this->app->make(\App\Litepie\Role::class);
        });
        $this->app->bind('app.master', function ($app) {
            return $this->app->make(\App\Litepie\Master::class);
        });
        $this->app->bind('app.settings', function ($app) {
            return $this->app->make(\App\Litepie\Setting::class);
        });
        $this->app->bind('app.team', function ($app) {
            return $this->app->make(\App\Litepie\Team::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
