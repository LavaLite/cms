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

// User routs
Route::get('/',  'PublicController@home');

// Authentication routes...
Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');
Route::get('logout', 'UserController@getLogout');

// Registration routes...
Route::get('register', 'UserController@getRegister');
Route::post('register', 'UserController@postRegister');

// User routs
Route::get('user',  'UserController@home');

// Password reset link request routes...
Route::get('user/password/email', 'UserController@getEmail');
Route::post('user/password/email', 'UserController@postEmail');

// Password reset routes...
Route::get('user/password/reset/{token}', 'UserController@getReset');
Route::post('user/password/reset', 'UserController@postReset');

// Admin routes...
Route::get('admin/', 'AdminController@home');
Route::get('admin/profile', 'AdminController@profile');
Route::get('admin/lock', 'AdminController@lock');
Route::get('admin/masters', 'AdminController@masters');
Route::get('admin/reports', 'AdminController@reports');

// Authentication routes...
Route::get('admin/login', 'AdminController@getLogin');
Route::post('admin/login', 'AdminController@postLogin');
Route::get('admin/logout', 'AdminController@getLogout');

// Password reset link request routes...
Route::get('admin/password/email', 'AdminController@getEmail');
Route::post('admin/password/email', 'AdminController@postEmail');

// Password reset routes...
Route::get('admin/password/reset/{token}', 'AdminController@getReset');
Route::post('admin/password/reset', 'AdminController@postReset');


