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

Route::any('admin/', 'AdminController@showHome');
Route::get('admin/cache/clear', 'AdminController@clearCache');

// User routes
Route::get('login',  array('as' => 'user.login',  'uses'  => 'UserController@login'));
Route::post('login',  array('as' => 'user.login',  'uses'  => 'UserController@postLogin'));
Route::get('logout', array('as' => 'user.logout', 'uses'  => 'UserController@logout'));


// Homepage
Route::get('/',  'PublicController@showIndex');
