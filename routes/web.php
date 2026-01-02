<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestDashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// USER
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// GUEST
Route::get('/home', [GuestDashboardController::class, 'index'])->name('guest.index');

// AUTH
Route::get('/register', fn () => view('auth.register'))->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);

// KARYAWAN (ADMIN)
Route::resource('karyawan', KaryawanController::class);

// STAFF
Route::get('/staff', [StaffController::class, 'index'])->name('staff.dashboard');
Route::get('/staff/perizinan', [StaffController::class, 'perizinan'])->name('staff.perizinan');
Route::post('/staff/perizinan/upload', [StaffController::class, 'uploadIzin'])->name('staff.upload');
Route::get('/staff/slip-gaji', [StaffController::class, 'slipGaji'])->name('staff.slip_gaji');
