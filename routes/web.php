<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NationController;
use App\Http\Controllers\Backend\FilmController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Frontend\DetailController;

Route::get('{code}', [DetailController::class, 'index']);

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::resource('category', CategoryController::class);
    Route::resource('nation', NationController::class);
    Route::resource('film', FilmController::class);
//    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
