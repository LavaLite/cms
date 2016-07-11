<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::group(['middleware' => 'web'], function () {

    // Home page for the website.
    Route::get(trans_setlocale() . '/', 'PublicWebController@home');
    Route::get(trans_setlocale() . '/home', 'UserWebController@home');

    Route::get(trans_setlocale() . '/client', 'ClientWebController@home');

    Route::get(trans_setlocale() . '/client/profile', 'ClientWebController@getProfile');
    Route::post(trans_setlocale() . '/client/profile', 'ClientWebController@postProfile');
    Route::get(trans_setlocale() . '/client/password', 'ClientWebController@getPassword');
    Route::post(trans_setlocale() . '/client/password', 'ClientWebController@postPassword');

    Route::auth();
});
