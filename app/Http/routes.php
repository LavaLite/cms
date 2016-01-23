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

// Home page for the website.
Route::get('/', 'PublicController@home');

// Dashboard for administartor

// User routes
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'UserController@home');

    Route::get('/admin', 'AdminController@home');
    // Routes for facades testing
    Route::get('facade/test', function (\Illuminate\Http\Request $request) {
        return \Trans::to('en/admin/page/page');
    });
});


// Routes for facades testing
Route::get('test/crypt', function () {

});

// Routes for facades testing
Route::get('test/decrypt', function () {
    return strlen('eyJpdiI6IkI2R0Yxc2tNR0hGdEtpVWR6ZzA3OEE9PSIsInZhbHVlIjoiSUxadEF5b3BZMEZYWU02cnRRcGxqdHFrM29tbzk4cXh6M1RVbkxFTXNUUXVHTmhEXC9qQVc1VWltVWlDayswQ0QiLCJtYWMiOiJkYzdmYzBiNzM3ZjM4M2E3Mzg3Mzg2YzZkYjZhNWFmZTE2ZTg0ZWMyN2MwYmY3NDc0MmFlZTdlODFiMjgxN2FlIn0=');
});