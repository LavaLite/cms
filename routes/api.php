<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::prefix('{guard}')->group(function () {
    Route::get('/me', 'Auth\APILoginController@profile');
    Route::post('/login', 'Auth\APILoginController@postLogin');
    Route::get('/my/{part?}', 'APIController@home');
});
