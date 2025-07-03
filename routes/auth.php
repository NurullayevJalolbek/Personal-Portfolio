<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::group(['middleware' => ['guest']], function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.post');
});

Route::group(['middleware' => ['auth']], function () {
    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
