<?php

Route::group(
    [
        'prefix' => '{guard}',
        'as' => 'guard.',
        'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
    ],
    function () {
        Auth::routes();
        Route::post('sanctum/login', 'Auth\SanctumController@login');
        Route::get('sanctum/profile', 'Auth\SanctumController@profile');
        Route::get('/', 'ResourceController@home')->name('home');
        Route::get('profile', 'Auth\ProfileController@profile');
        Route::post('profile', 'Auth\ProfileController@postProfile');
        Route::get('password', 'Auth\ProfileController@password');
        Route::post('password', 'Auth\ProfileController@postPassword');
        Route::get('profile/{user}', 'Auth\ProfileController@profile');
        Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
        Route::get('login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
    }
);
