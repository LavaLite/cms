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

//********* User routs. *********//
Route::get('home', 'UserController@home');

// Authentication routes...
Route::get('login', 'Auth\UserAuthController@getLogin');
Route::post('login', 'Auth\UserAuthController@postLogin');
Route::get('logout', 'Auth\UserAuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\UserAuthController@getRegister');
Route::post('register', 'Auth\UserAuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\UserPasswordController@getEmail');
Route::post('password/email', 'Auth\UserPasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\UserPasswordController@getReset');
Route::post('password/reset', 'Auth\UserPasswordController@postReset');

//********* Admin routs. *********//
Route::get('admin', 'AdminController@home');

// Authentication routes...
Route::get('admin/login', 'Auth\AdminAuthController@getLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');
Route::get('admin/logout', 'Auth\AdminAuthController@getLogout');

// Registration routes...
//Route::get('admin/register', 'Auth\AdminAuthController@getRegister');
//Route::post('admin/register', 'Auth\AdminAuthController@postRegister');

// Password reset link request routes...
Route::get('admin/password/email', 'Auth\AdminPasswordController@getEmail');
Route::post('admin/password/email', 'Auth\AdminPasswordController@postEmail');

// Password reset routes...
Route::get('admin/password/reset/{token}', 'Auth\AdminPasswordController@getReset');
Route::post('admin/password/reset', 'Auth\AdminPasswordController@postReset');

Route::get('admin/profile', 'AdminController@profile');
Route::get('admin/lock', 'AdminController@lock');
Route::get('admin/masters', 'AdminController@masters');
Route::get('admin/reports', 'AdminController@reports');

Route::get('test/facades', function () {
    $secret = 'dddd';//Crypt::encrypt('!qserf!');
    echo $secret;

    try {
        $decrypted = Crypt::decrypt($secret);
    } catch (Illuminate\Contracts\Encryption\DecryptException $e) {
        echo $secret;
    }
    echo $secret;
});
