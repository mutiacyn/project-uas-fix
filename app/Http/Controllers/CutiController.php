<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Semua pengajuan (Admin) atau Riwayat (Staff)
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $cuti = Cuti::with('user')->get();
        } else {
            $cuti = Cuti::where('user_id', Auth::id())->get();
        }

        return view('cuti.index', compact('cuti'));
    }

    // Form pengajuan cuti/izin (Staff)
    public function create()
    {
        return view('cuti.create');
    }

    // Simpan pengajuan
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|string',
            'sub_jenis' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'alasan' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $fileName = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->storeAs('cuti_files', $fileName, 'public');
        }

        Cuti::create([
            'user_id' => Auth::id(),
            'jenis' => $request->jenis,
            'sub_jenis' => $request->sub_jenis,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'alasan' => $request->alasan,
            'file' => $fileName,
        ]);

        return redirect()->route('cuti.index')->with('success', 'Pengajuan cuti berhasil dikirim!');
    }

    // Approve / Reject (Admin)
    public function updateStatus(Request $request, Cuti $cuti)
    {
        $request->validate([
            'status' => 'required|in:Approved,Rejected',
        ]);

        $cuti->update(['status' => $request->status]);

        return redirect()->back()->with('success','Status pengajuan berhasil diperbarui!');
    }
}
