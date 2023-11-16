<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('hello');
});

// Auth::routes();
Route::group(['middleware' => ['guest']], function () {
    Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
        Route::get('/login', 'AuthController@show')->name('login');
        Route::post('/login', 'AuthController@login')->name('auth.login');
    });
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/laundry', [App\Http\Controllers\Trans\LaundryController::class, 'index'])->name('laundry.index');


Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
});

