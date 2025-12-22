<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        // Nantinya Anda bisa mengambil data dari Database di sini
        return view('staff-dashboard');
    }
}