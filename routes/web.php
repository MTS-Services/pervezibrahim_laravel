<?php

use App\Http\Controllers\MultiLangController;
use Illuminate\Support\Facades\Route;

Route::post('language', [MultiLangController::class, 'langChange'])->name('lang.change');

require __DIR__ . '/auth.php';
require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/frontend.php';
// require __DIR__ . '/fortify-admin.php';
