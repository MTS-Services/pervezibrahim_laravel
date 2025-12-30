<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\FAQController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MethodController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::group(['as' => 'f.'], function () {
//     Route::get('/', [HomeController::class, 'home'])->name('home');
// });
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/method', [MethodController::class, 'index'])->name('method');
Route::get('/method-reader/{slug}', [MethodController::class, 'reader'])->name('method.reader');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');