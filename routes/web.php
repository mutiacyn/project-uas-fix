<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestDashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CutiController;
/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Auth Routes (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Dashboard Redirect (After Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard & Profile
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ===================== CUTI =====================
    Route::get('/cuti', [CutiController::class, 'index'])->name('cuti.index');          // semua login
    Route::get('/cuti/create', [CutiController::class, 'create'])->name('cuti.create'); // semua login
    Route::post('/cuti', [CutiController::class, 'store'])->name('cuti.store');         // semua login

    // Admin-only cuti
    Route::middleware('role:admin')->group(function () {
        Route::get('/cuti/{cuti}/edit', [CutiController::class, 'edit'])->name('cuti.edit');
        Route::put('/cuti/{cuti}', [CutiController::class, 'update'])->name('cuti.update');
        Route::delete('/cuti/{cuti}', [CutiController::class, 'destroy'])->name('cuti.destroy');
    });

    // ===================== ADMIN =====================
    Route::middleware('role:admin')->group(function () {
        Route::resource('karyawan', KaryawanController::class);
        Route::resource('divisi', DivisionController::class);
        Route::resource('jabatan', PositionController::class);
        Route::resource('user', UserController::class);
        Route::put('/cuti/{cuti}/approve', [CutiController::class, 'approve'])->name('admin.cuti.approve');
        Route::put('/cuti/{cuti}/reject', [CutiController::class, 'reject'])->name('admin.cuti.reject');
    });
 
    // ===================== STAFF =====================
    Route::middleware('role:staff')->group(function () {
        // Staff dashboard sekaligus menampung form cuti
        Route::get('/staff', [StaffController::class, 'index'])->name('staff.dashboard');
        Route::post('/staff/cuti', [CutiController::class, 'store'])->name('staff.cuti.store');
    });

    // ===================== GUEST =====================
    Route::middleware('role:guest')->group(function () {
        Route::get('/guest', [GuestDashboardController::class, 'index'])->name('guest.dashboard');
    });

});