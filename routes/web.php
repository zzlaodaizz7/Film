<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DetailController;

//Trang giới thiệu phim
Route::get('{code}', [DetailController::class, 'index'])->name('detail');
//Trang xem phim
Route::get('w/{code}', [DetailController::class, 'watch'])->name('watch');
//Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

