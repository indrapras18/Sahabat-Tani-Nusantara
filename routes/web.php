<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\DashboardController;
use App\Http\Controllers\Inventory\StockInController;
use App\Http\Controllers\Inventory\StockOutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('stockin', StockInController::class)
    ->middleware('auth');

Route::resource('stockout', StockOutController::class)
    ->middleware('auth');
