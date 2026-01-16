<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cuti;
use App\Models\Karyawan;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return $this->admin();
        }

        if ($user->hasRole('staff')) {
            // return $this->staff();
            return redirect()->route('staff.dashboard');
        }

        return redirect()->route('guest.dashboard');
    }

    public function admin()
    {
        $totalKaryawan = Karyawan::count();
        $totalUser     = User::count();
    
        $cutiPending   = Cuti::where('status', 'pending')->count();
        $cutiApproved  = Cuti::where('status', 'approved')->count();
        $cutiRejected  = Cuti::where('status', 'rejected')->count();

        $totalCuti = $cutiApproved + $cutiPending + $cutiRejected;
        $barApproved = $totalCuti ? ($cutiApproved / $totalCuti) * 100 : 0;
        $barPending  = $totalCuti ? ($cutiPending / $totalCuti) * 100 : 0;
        $barRejected = $totalCuti ? ($cutiRejected / $totalCuti) * 100 : 0;


        return view('admin.dashboard', compact(
            'totalKaryawan',
            'totalUser',
            'totalCuti',
            'cutiPending',
            'cutiApproved',
            'cutiRejected',
            'barApproved',
            'barPending',
            'barRejected'
        ));
    }

    public function staff()
{
    $userId = Auth::id();

    $totalCuti    = Cuti::where('user_id', $userId)->count();
    $cutiPending  = Cuti::where('user_id', $userId)->where('status', 'pending')->count();
    $cutiApproved = Cuti::where('user_id', $userId)->where('status', 'approved')->count();
    $cutiRejected = Cuti::where('user_id', $userId)->where('status', 'rejected')->count();

    return view('staff.dashboard', [
        'totalCuti'    => Cuti::where('user_id', $userId)->count(),
        'cutiPending'  => Cuti::where('user_id', $userId)->where('status', 'pending')->count(),
        'cutiApproved' => Cuti::where('user_id', $userId)->where('status', 'approved')->count(),
        'cutiRejected' => Cuti::where('user_id', $userId)->where('status', 'rejected')->count(),
    ]);
}
}
