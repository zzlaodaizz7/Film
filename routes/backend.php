<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NationController;
use App\Http\Controllers\Backend\FilmController;
use App\Http\Controllers\Auth\LoginController;


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('nation', NationController::class)->middleware('auth');
Route::resource('film', FilmController::class)->middleware('auth');
