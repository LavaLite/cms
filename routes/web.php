<?php

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PublicController@home');
Route::post('web/test/profile/picture', 'PublicController@picture');

Route::group(['prefix' => '{guard?}'], function () {
    Auth::routes();
});
Auth::routes();


Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => '1',
        'redirect_uri' => 'http://localhost/lavalite/5.0/public/auth/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://localhost/lavalite/5.0/public/oauth/authorize?'.$query);
});