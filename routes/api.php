<?php

use App\Http\Controllers\Api\ApiDailyVisitController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return "The site is working...";
});

Route::get('/daily-visits/count', [ApiDailyVisitController::class, 'count']);
Route::get('/daily-visits/weekly', [ApiDailyVisitController::class, 'weekly']);
