<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\UserController; // Add this line

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('cities', CityController::class);
    Route::resource('centers', CenterController::class);
    Route::resource('vaccines', VaccineController::class);
    Route::resource('users', UserController::class);
});
