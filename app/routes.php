<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




// Adding auth checks for the upload functionality is highly recommended.

//Admin routes
Route::get('admin/login',   array('as' => 'admin.login',        'uses'  => 'AdminController@login'));
Route::post('admin/login',  array('as' => 'admin.post.login',   'uses'  => 'AdminController@postLogin'));
Route::get('admin/logout',  array('as' => 'admin.logout',       'uses'  => 'AdminController@logout'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'AdminController@showHome');
    Route::get('/cache/clear', 'AdminController@clearCache');
});

// User routes
Route::get('login',  array('as' => 'user.login',  'uses'  => 'UserController@login'));
Route::get('logout', array('as' => 'user.logout', 'uses'  => 'UserController@logout'));

Route::group(array('prefix' => 'user', 'before' => 'auth.user'), function()
{
    Route::any('/', 'UserController@showHome');
});

// Homepage
Route::get('/',  'PublicController@showIndex');



