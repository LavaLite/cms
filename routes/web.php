<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'PublicController@home');

Route::group(
    [
        'middleware' => 'trans',
        'prefix' => '{trans}',
        'as' => 'trans.',
        'where' => ['trans' => '[a-zA-Z]{2}'],
    ],
    function () {
        Route::get('/', 'ResourceController@home')->name('home');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        require __DIR__.'/auth.php';
    }
);

Route::group(
    [
        'prefix' => '{guard}',
        'as' => 'guard.',
        'where' => ['guard' => implode('|', array_keys(config('auth.guards')))],
        'middleware' => ['set.guard']
    ],
    function () {
        Route::get('/', [ResourceController::class, 'home'])->name('home');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        require __DIR__.'/auth.php';
    }
);
