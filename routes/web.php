<?php

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PublicController@home');

Route::group(['prefix' => set_route_guard('web')], function () {
    Auth::routes();
    Route::get('/', 'ResourceController@home');
});
