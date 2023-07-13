<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::group(
    [
        'prefix' => '{guard}',
        'as' => 'guard.',
        'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
    ],
    function () {
        Route::get('/', 'ResourceController@home')->name('home');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // Route::get('password', 'Auth\ProfileController@password');
        // Route::post('password', 'Auth\ProfileController@postPassword');
        // Route::get('profile/{user}', 'Auth\ProfileController@profile');
        // Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
        // Route::get('login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
        require __DIR__.'/auth.php';
    }
);
