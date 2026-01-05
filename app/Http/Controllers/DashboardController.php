<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return redirect()->route('karyawan.index');
        }

        if ($user->hasRole('staff')) {
            return redirect()->route('cuti.store');
        }

        return redirect()->route('guest.dashboard');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
