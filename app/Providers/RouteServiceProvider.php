<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Litepie\Master\Interfaces\MasterRepositoryInterface;
use Litepie\Roles\Interfaces\PermissionRepositoryInterface;
use Litepie\Roles\Interfaces\RoleRepositoryInterface;
use Litepie\User\Interfaces\ClientRepositoryInterface;
use Litepie\User\Interfaces\UserRepositoryInterface;
use Request;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/user';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();

        if (Request::is('*admin/user/user/*')) {
            Route::bind('user', function ($user) {
                $userRepo = $this->app->make(UserRepositoryInterface::class);

                return $userRepo->findorNew($user);
            });
        }
        if (Request::is('*admin/user/client/*')) {
            Route::bind('client', function ($client) {
                $clientRepo = $this->app->make(ClientRepositoryInterface::class);

                return $clientRepo->findorNew($client);
            });
        }

        if (Request::is('*admin/role/role/*')) {
            Route::bind('role', function ($role) {
                $roleRepo = $this->app->make(RoleRepositoryInterface::class);

                return $roleRepo->findorNew($role);
            });
        }

        if (Request::is('*admin/role/permission/*')) {
            Route::bind('permission', function ($permission) {
                $permissionRepo = $this->app->make(PermissionRepositoryInterface::class);

                return $permissionRepo->findorNew($permission);
            });
        }

        if (Request::is('*admin/masters*')) {
            Route::bind('master', function ($master) {
                $masterRepo = $this->app->make(MasterRepositoryInterface::class);

                return $masterRepo->findorNew($master);
            });
        }
        if (Request::is('*admin/teams/*')) {
            Route::bind('team', function ($team) {
                $teamRepo = $this->app->make(TeamRepositoryInterface::class);

                return $teamRepo->findorNew($team);
            });
        }
        if (Request::is('*admin/settings/*')) {
            Route::bind('setting', function ($settinf) {
                $settinfRepo = $this->app->make(SettingRepositoryInterface::class);

                return $settinfRepo->findorNew($settinf);
            });
        }
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
