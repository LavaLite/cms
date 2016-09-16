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

Route::group(['middleware' => 'web', 'prefix' => trans_setlocale()], function () {

    // Home page for the website.
    Route::get('/', 'PublicWebController@home');
    Route::get('/home', 'UserWebController@home');

    Route::get('/client', 'ClientWebController@home');

	Route::group(['prefix' => '{guard?}'], function () {
		Route::auth();
	});
	Route::auth();
});
