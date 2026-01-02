<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
    
        User::create([
            'name'    => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guest',
            'status' => 'aktif',
            'karyawan_id' => null,
        ]);
    
        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }
    
    public function login(Request $request)
{
    // 1. validasi input
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // 2. cek login
    if (!Auth::attempt($credentials)) {
        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    // 3. ambil user yang login
    $user = Auth::user();

    // 4. LOGIKA YANG KAMU TANYA ITU DI SINI 👇
    if ($user->role === 'admin') {
        return redirect() ->route('karyawan.index');
    } 
    else if ($user->role === 'karyawan' && $user->karyawan_id !== null) {
        return redirect('/karyawan/dashboard');
    } 
    else {
        return redirect('/home')->with('info', 'Login sebagai guest');
    }
}
}
