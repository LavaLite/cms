<?php

Route::prefix('{guard}/user')->group(function () {
    Route::resource('user', 'Litepie\UserResourceController');
    Route::resource('{type}', 'Litepie\ClientResourceController', ['parameters' => [
        '{type}' => 'client',
    ]]);
});
Route::get('{guard}/profile/{user}', 'Litepie\UserProfileController@profile');
Route::get('{guard}/profile', 'Litepie\UserProfileController@profile');
Route::post('{guard}/profile', 'Litepie\UserProfileController@postProfile');
Route::get('{guard}/password', 'Litepie\UserProfileController@password');
Route::post('{guard}/password', 'Litepie\UserProfileController@postPassword');

Route::prefix('{guard}/roles')->group(function () {
    Route::resource('role', 'Litepie\RoleResourceController');
});


Route::prefix('{guard}/teams')->group(function () {
    Route::resource('team', 'Litepie\TeamResourceController');
});

// Guard routes for setting
Route::prefix('{guard}/settings')->group(function () {
    Route::get('/', 'Litepie\SettingResourceController@index');
    Route::get('/{slug}', 'Litepie\SettingResourceController@show');
    Route::post('/{type}', 'Litepie\SettingResourceController@store');
});

Route::prefix('{guard}/masters')->group(function () {
    Route::get('/', 'Litepie\MasterResourceController@index');
    Route::get('{type}/list', 'Litepie\MasterResourceController@index');
    Route::resource('master', 'Litepie\MasterResourceController');
});


// // Public routes for master
// Route::get('masters/', 'Litepie\MasterPublicController@index');
// Route::get('master/{slug?}', 'Litepie\MasterPublicController@show');

// // Public routes for settings
// Route::get('settings/', 'Litepie\SettingsPublicController@index');
// Route::get('settings/{slug?}', 'Litepie\SettingsPublicController@show');

// // Public routes for users
// Route::get('users/', 'Litepie\UsersPublicController@index');
// Route::get('users/{slug?}', 'Litepie\UsersPublicController@show');
