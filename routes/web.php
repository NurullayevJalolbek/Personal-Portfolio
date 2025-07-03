<?php

use App\Http\Controllers\Site\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['locale', 'visits']], function () {

    Route::get('/home', [HomePageController::class, 'index'])->name('home');

    include('admin.php');
    include('auth.php');
});


