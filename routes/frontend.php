<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::group(['as' => 'f.'], function () {
//     Route::get('/', [HomeController::class, 'home'])->name('home');
// });
