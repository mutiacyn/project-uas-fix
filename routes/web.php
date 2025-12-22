<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestDashboardController;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/home', [GuestDashboardController::class, 'index'])->name('guest.index');

Route::get('/staff', function () {
    return view('staff-dashboard');
});