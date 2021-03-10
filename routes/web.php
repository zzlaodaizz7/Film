<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NationController;
use App\Http\Controllers\Backend\FilmController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Frontend\DetailController;

Route::get('{code}', [DetailController::class, 'index'])->name('detail');
Route::get('w/{code}', [DetailController::class, 'watch'])->name('detail');
Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('category', CategoryController::class);
    Route::resource('nation', NationController::class);
    Route::resource('film', FilmController::class);
//    Route::get('/home', 'HomeController@index')->name('home');
});
