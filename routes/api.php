<?php

use App\Http\Controllers\Auth\AuthenticatedApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
        'middleware' => 'trans',
        'prefix' => '{trans}',
        'as' => 'trans.',
        'where' => ['trans' => '[a-zA-Z]{2}'],
    ],
    function () {

        Route::post('logout', [AuthenticatedApiController::class, 'destroy'])
            ->name('api.logout');
    }
);

Route::group(
    [
        'prefix' => '{guard}',
        'as' => 'guard.',
        'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
    ],
    function () {
        Route::get('profile', [AuthenticatedApiController::class, 'profile'])
            ->name('api.profile');
        Route::get('login', [AuthenticatedApiController::class, 'create'])
            ->name('api.login');
        Route::post('login', [AuthenticatedApiController::class, 'store'])
            ->name('api.login');
    }
);
