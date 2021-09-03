<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Repositories\Eloquent\ClientRepository::class => \App\Policies\ClientPolicy::class,
        \App\Repositories\Eloquent\MasterRepository::class => \App\Policies\MasterPolicy::class,
        \App\Repositories\Eloquent\PermissionRepository::class => \App\Policies\PermissionPolicy::class,
        \App\Repositories\Eloquent\RoleRepository::class => \App\Policies\RolePolicy::class,
        \App\Repositories\Eloquent\SettingRepository::class => \App\Policies\SettingPolicy::class,
        \App\Repositories\Eloquent\UserRepository::class => \App\Policies\UserPolicy::class,
        \App\Repositories\Eloquent\TeamRepository::class => \App\Policies\TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
