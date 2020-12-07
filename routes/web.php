<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'PublicController@home');

Route::group(
    [
        'prefix' => '{guard}',
        'as' => 'guard.',
        'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
    ],

    function () {
        Auth::routes();
        Route::get('/', 'ResourceController@home')->name('home');
        Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
        Route::group(['prefix' => 'user'], function () {
            Route::resource('user', 'User\UserResourceController');
            Route::resource('{type}', 'User\ClientResourceController', ['parameters' => [
                '{type}' => 'client',
            ]]);
        });
        Route::get('profile/{user}', 'UserPublicController@profile');
    }
);

Route::group(
    [
        'middleware' => 'trans',
        'prefix' => '{trans}',
        'as' => 'trans.',
        'where' => ['trans' => Trans::keys('|')],
    ],
    function () {
        Route::group(
            [
                'prefix' => '{guard}',
                'as' => 'guard.',
                'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
            ],
            function () {
                Auth::routes();
                Route::get('/', 'ResourceController@home')->name('home');
                Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
                Route::group(['prefix' => 'user'], function () {
                    Route::resource('user', 'User\UserResourceController');
                    Route::resource('{type}', 'User\ClientResourceController', ['parameters' => [
                        '{type}' => 'client',
                    ]]);
                });
                Route::get('profile/{user}', 'UserPublicController@profile');
            }
        );
    }
);
