<?php

use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MethodController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::group(['as' => 'f.'], function () {
//     Route::get('/', [HomeController::class, 'home'])->name('home');
// });
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/method', [MethodController::class, 'index'])->name('method');