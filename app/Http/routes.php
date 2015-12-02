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

// Public routs.
Route::get('/', 'PublicController@home');

//********* Admin routs. *********//
Route::get('admin', 'AdminController@home');
Route::get('admin/profile', 'AdminController@profile');
Route::get('admin/lock', 'AdminController@lock');
Route::get('admin/masters', 'AdminController@masters');
Route::get('admin/reports', 'AdminController@reports');

// Authentication routes for admin...
Route::get('auth/admin/login', 'Auth\AdminAuthController@getLogin');
Route::post('auth/admin/login', 'Auth\AdminAuthController@postLogin');
Route::get('auth/admin/logout', 'Auth\AdminAuthController@getLogout');

// Password reset link request routes for admin...
Route::get('password/admin/email', 'Auth\AdminPasswordController@getEmail');
Route::post('password/admin/email', 'Auth\AdminPasswordController@postEmail');

// Password reset routes for admin...
Route::get('password/admin/reset/{token}', 'Auth\AdminPasswordController@getReset');
Route::post('password/admin/reset', 'Auth\AdminPasswordController@postReset');

//********* User routs. *********//
Route::get('{role}/home', 'UserController@home');

// Authentication routes for users...
Route::get('auth/{role}/login', 'Auth\AuthController@getLogin');
Route::post('auth/{role}/login', 'Auth\AuthController@postLogin');
Route::get('auth/{role}/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/{role}/register', 'Auth\AuthController@getRegister');
Route::post('auth/{role}/register', 'Auth\AuthController@postRegister');

// Password reset link request routes for users...
Route::get('password/{role}/email', 'Auth\PasswordController@getEmail');
Route::post('password/{role}/email', 'Auth\PasswordController@postEmail');

// Password reset routes for users...
Route::get('password/{role}/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/{role}/reset', 'Auth\PasswordController@postReset');
