<?php

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

// Route::get('/', function () {
//     // return view('welcome');
//     return 'Hello To ORBIT';
// });


// Route::get('/test', function () {
//     // return view('welcome');
//     return 'Hello To ORBIT! From the TEST';
// })->name('orbit.test');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('login', function (HttpRequest $request) {
    dd($request->all());
})->name('login.submit');
