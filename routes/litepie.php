<?php

Route::group(
    [
        'prefix' => '{guard}',
        'as' => 'guard.',
        'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
    ],
    function () {
        Auth::routes();
        Route::get('/', 'ResourceController@home')->name('home');
        Route::get('profile', 'Auth\ProfileController@profile');
        Route::post('profile', 'Auth\ProfileController@postProfile');
        Route::get('password', 'Auth\ProfileController@password');
        Route::post('password', 'Auth\ProfileController@postPassword');
        Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
        Route::get('profile/{user}', 'Auth\ProfileController@profile');

        Route::prefix('user')->group(function () {
            Route::resource('user', 'Litepie\UserResourceController');
            Route::resource('client', 'Litepie\ClientResourceController');
        });

        Route::prefix('role')->group(function () {
            Route::resource('role', 'Litepie\RoleResourceController');
            Route::resource('permission', 'Litepie\PermissionResourceController');
        });

        Route::prefix('team')->group(function () {
            Route::resource('team', 'Litepie\TeamResourceController');
        });

        // Guard routes for setting
        Route::prefix('settings')->group(function () {
            Route::get('/', 'Litepie\SettingResourceController@index');
            Route::get('/{slug}', 'Litepie\SettingResourceController@show');
            Route::post('/{type}', 'Litepie\SettingResourceController@store');
        });

        Route::prefix('masters')->group(function () {
            Route::get('/', 'Litepie\MasterResourceController@index');
            Route::get('{type}/list', 'Litepie\MasterResourceController@index');
            Route::resource('master', 'Litepie\MasterResourceController');
        });
    }
);
