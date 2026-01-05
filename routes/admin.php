<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\UserManagement\UserController;
use App\Http\Controllers\Backend\Admin\UserManagement\AdminController;
use App\Http\Controllers\Backend\Admin\ApplicationSettings\ApplicationSettingsController;
use App\Http\Controllers\Backend\Admin\ContactFormController;
use App\Http\Controllers\Backend\Admin\FaqController;
use App\Http\Controllers\Backend\Admin\PdfController;
use App\Http\Controllers\Backend\Admin\VideoController;

Route::middleware(['auth:admin', 'admin', 'adminVerify'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.admin.pages.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'user-management', 'as' => 'um.'], function () {

        Route::controller(AdminController::class)->name('admin.')->prefix('admin')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/view/{id}', 'view')->name('view');
            Route::get('/trash', 'trash')->name('trash');
        });

        Route::controller(UserController::class)->name('user.')->prefix('user')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/view/{id}', 'view')->name('view');
            Route::get('/trash', 'trash')->name('trash');
            Route::get('/profile-info/{id}', 'profileInfo')->name('profileInfo');
            Route::get('/shop-info/{id}', 'shopInfo')->name('shopInfo');
            Route::get('/kyc-info/{id}', 'kycInfo')->name('kycInfo');
            Route::get('/statistic/{id}', 'statistic')->name('statistic');
            Route::get('/referral/{id}', 'referral')->name('referral');
        });
    });

    Route::group(['prefix' => 'application-settings', 'as' => 'as.'], function () {

        Route::controller(ApplicationSettingsController::class)->prefix('application-settings')->group(function () {
            Route::get('/general-settings', 'generalSettings')->name('general-settings');
            Route::get('/database-settings', 'databaseSettings')->name('database-settings');
            Route::get('/tik-tok-settings', 'tikTokSettings')->name('tik-tok-settings');
        });
    });

    Route::controller(FaqController::class)->name('faq.')->prefix('faq')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
        Route::get('/trash', 'trash')->name('trash');
    });
    Route::controller(VideoController::class)->name('video.')->prefix('video')->group(function () {
        Route::get('/home-banner', 'homeBanner')->name('home-banner');
        Route::get('/about-us', 'aboutUs')->name('about-us');
        Route::get('/about-us-gallery', 'aboutUsGallery')->name('about-us-gallery');
        Route::get('/service', 'service')->name('service');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
        Route::get('/trash', 'trash')->name('trash');
    });

    Route::controller(PdfController::class)->name('pdf.')->prefix('pdf')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
    });
    Route::controller(ContactFormController::class)->name('contact-form.')->prefix('contact-form')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/view/{id}', 'view')->name('view');
    });
});
