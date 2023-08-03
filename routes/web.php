<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('client')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::get('layout', [DashboardController::class, 'getSplashScreen'])->name('splash.screen');
    });
});
