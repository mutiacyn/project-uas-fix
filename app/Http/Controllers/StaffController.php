<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class StaffController extends Controller
{
    public function index()
    {
        $riwayatCuti = session()->get('riwayat_cuti', []);
        return view('staff.staff-dashboard', compact('riwayatCuti'));
    }

    public function perizinan()
    {
        return view('staff.staff-perizinan');
    }

    public function uploadIzin(Request $request)
    {
        $request->validate([
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'jenis_cuti' => 'required',
            'file_cuti' => 'required|mimes:pdf,jpg,png|max:2048',
        ]);

        $mulai = Carbon::parse($request->tgl_mulai);
        $selesai = Carbon::parse($request->tgl_selesai);
        $durasi = $mulai->diffInDays($selesai) + 1;

        $dataBaru = [
            'tanggal_pengajuan' => now()->format('Y-m-d'),
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'jenis' => $request->jenis_cuti,
            'durasi' => $durasi,
            'status' => 'Menunggu',
            'warna' => 'warning'
        ];

        session()->push('riwayat_cuti', $dataBaru);

        return redirect()->route('staff.dashboard')->with('success', 'Pengajuan cuti berhasil terkirim!');
    }

    // FUNGSI BARU UNTUK SLIP GAJI
    public function slipGaji()
    {
        $dataGaji = [
            'nama' => 'Douglas McGee',
            'jabatan' => 'Staff',
            'bulan' => 'Desember 2025',
            'gaji_pokok' => 5000000,
            'tunjangan' => 1500000,
            'potongan' => 200000,
        ];
        
        $totalGaji = $dataGaji['gaji_pokok'] + $dataGaji['tunjangan'] - $dataGaji['potongan'];

        return view('staff.staff-slip-gaji', compact('dataGaji', 'totalGaji'));
    }
    
}