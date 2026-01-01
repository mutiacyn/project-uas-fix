<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestDashboardController;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/home', [GuestDashboardController::class, 'index'])->name('guest.index');

// GRUP RUTE STAFF
Route::get('/staff', [StaffController::class, 'index'])->name('staff.dashboard');
Route::get('/staff/perizinan', [StaffController::class, 'perizinan'])->name('staff.perizinan');
Route::post('/staff/perizinan/upload', [StaffController::class, 'uploadIzin'])->name('staff.upload');
Route::get('/staff/slip-gaji', [StaffController::class, 'slipGaji'])->name('staff.slip_gaji');