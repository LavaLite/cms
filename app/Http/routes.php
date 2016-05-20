<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

// Dashboard for administartor

// User routes
Route::group(['middleware' => 'web'], function () {

    // Home page for the website.
    Route::get('/', 'PublicWebController@home');
    Route::get('/home', 'UserWebController@home');

    Route::get('/client', 'ClientWebController@home');

    Route::get('client/profile', 'ClientWebController@getProfile');
    Route::post('client/profile', 'ClientWebController@postProfile');
    Route::get('client/password', 'ClientWebController@getPassword');
    Route::post('client/password', 'ClientWebController@postPassword');

    Route::auth();
});
