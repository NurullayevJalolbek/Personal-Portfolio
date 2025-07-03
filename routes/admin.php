<?php

use App\Http\Controllers\Admin\AdminLoginHistoryController;
use App\Http\Controllers\Admin\AdminUserActionController;
use App\Http\Controllers\Admin\AdminDeveloperController;
use App\Http\Controllers\General\StatisticController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    // Dashboard routelari
    Route::get('', [StatisticController::class, 'index'])->name('dashboard');

    // Adminlar routelari
    Route::resource('users', AdminUserController::class)->except(['show']);

    // Developer routelari
    Route::resource('developers', AdminDeveloperController::class)->except(['show']);

    // Posts routelari
    Route::resource('posts', AdminPostController::class)->except(['show']);



    Route::group(['prefix' => 'login-histories', 'as' => 'login-histories.'], function () {
        Route::controller(AdminLoginHistoryController::class)->group(function () {
            Route::get('', 'index')->name('index');
        });
    });

    Route::group(['prefix' => 'user-actions', 'as' => 'user-actions.'], function () {
        Route::controller(AdminUserActionController::class)->group(function () {
            Route::get('', 'index')->name('index');
        });
    });

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::controller(AdminAboutController::class)->group(function () {
            Route::get('', 'edit')->name('edit');
            Route::put('{about}', 'update')->name('update');
        });
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::get('', 'profile')->name('edit');
            Route::put('', 'update')->name('update');
        });
        Route::get('localization/{lang}', 'localization')->name('localization');
    });
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('localization/{lang}', 'localization')->name('localization');
});
