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
    Route::get('/', 'PublicController@home');

    Route::auth();
    Route::get('login/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
    Route::get('/home', 'UserController@home');

    Route::get(Trans::setLocale().'/admin', 'AdminController@home');
    Route::get(Trans::setLocale().'admin/profile', 'AdminController@profile');
    Route::get(Trans::setLocale().'admin/lock', 'AdminController@lock');
    Route::get(Trans::setLocale().'admin/masters', 'AdminController@masters');
    Route::get(Trans::setLocale().'admin/reports', 'AdminController@reports');
});

Route::get('/test', function(){
    return  \Menu::menu('admin', 'menu.admin');
});