<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/latihan', [LatihanController::class, 'index']);
Route::get('/login', [GoogleController::class, 'loginPage']);

// Petani Action
Route::get('/petani', [PetaniController::class, 'index']);

// Dashboard
Route::get('/dashboard/admin', [DashboardController::class, 'index']);
