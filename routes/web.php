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
Route::post('/createFarmer', [PetaniController::class, 'createFarmer']);
Route::post('/updateFarmer/{id}', [PetaniController::class, 'updateFarmer']);
Route::get('/dashboard/farmer/edit/{id}', [PetaniController::class, 'formEdit']);
Route::get('/dashboard/farmer/delete/{id}', [App\Http\Controllers\PetaniController::class, 'deleteFarmer']);

// Dashboard
Route::get('/dashboard/admin', [DashboardController::class, 'index']);
Route::get('/dashboard/farmer-list', [DashboardController::class, 'farmerList']);
Route::get('/dashboard/farmer/form', [DashboardController::class, 'addFarmerForm']);
Route::get('/dashboard/cocok-tanam', [DashboardController::class, 'cocokTanam']);
Route::get('/dashboard/tanam/form', [DashboardController::class, 'addTanamForm']);

// Cocok Tanam
Route::get('/cocok-tanam', [App\Http\Controllers\CocokTanamController::class, 'index']);
Route::post('/createTanam', [App\Http\Controllers\CocokTanamController::class, 'createTanam']);
Route::get('/dashboard/tanam/edit/{id}', [App\Http\Controllers\CocokTanamController::class, 'formEdit']);
