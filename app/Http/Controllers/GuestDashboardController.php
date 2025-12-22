<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestDashboardController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }
}
