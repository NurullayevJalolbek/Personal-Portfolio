<?php

use App\Http\Controllers\Site\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->middleware('locale');

Route::group(['middleware' => ['locale', 'visits']], function () {

    Route::get('/home', [HomePageController::class, 'index'])->name('home');

    include('admin.php');
    include('auth.php');
});
