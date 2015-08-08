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

// Admin routes
Route::get('admin/login', ['as' => 'admin.login',        'uses'  => 'AdminController@login']);
Route::post('admin/login', ['as' => 'admin.post.login',   'uses'  => 'AdminController@postLogin']);
Route::get('admin/logout', ['as' => 'admin.logout',       'uses'  => 'AdminController@logout']);
Route::get('admin/', 'AdminController@home');

// User routes
Route::get('user', 'UserController@home');
Route::get('login', ['as' => 'user.login',             'uses'  => 'UserController@login']);
Route::post('login', ['as' => 'user.post.login',        'uses'  => 'UserController@postLogin']);
Route::get('logout', ['as' => 'user.logout',            'uses'  => 'UserController@logout']);
Route::get('register', ['as' => 'user.register',          'uses'  => 'UserController@register']);
Route::post('register', ['as' => 'user.post.register',     'uses'  => 'UserController@postRegister']);

Route::get('resend', ['as' => 'user.resend',            'UserController@getResend']);
Route::post('resend', ['as' => 'user.post.resend',       'UserController@resend']);

Route::get('forgot', ['as' => 'user.forgot',            'UserController@getForgot']);
Route::post('forgot', ['as' => 'user.post.forgot',       'UserController@forgot']);

Route::get('/check-active', ['as' => 'user.post.forgot',   'UserController@checkActive']);
Route::get('/user/{id}/activate/{code}', ['as' => 'user.post.forgot',   'UserController@activate']);
Route::get('/user/{id}/reset/{code}', ['as' => 'user.post.forgot',   'UserController@reset']);

// Homepage
Route::get('/', 'PublicController@home');

Route::get('/welcome', function () {
    return view('welcome');
});
