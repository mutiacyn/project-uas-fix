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

    // Tampilkan cuti
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $riwayatCuti = Cuti::with('user')->orderBy('created_at', 'desc')->get();
            return view('admin.cuti.index', compact('riwayatCuti'));
        } else {
            // Staff lihat cuti sendiri
            $cuti = Cuti::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
            
            // Kirim sebagai $riwayatCuti untuk konsistensi dengan view
            return view('staff.cuti.index', ['riwayatCuti' => $cuti]);
        }
    }

    public function create()
    {
        // Cek role user
        if (Auth::user()->hasRole('admin')) {
            return view('admin.cuti.create');
        } else {
            return view('staff.cuti.create');
        }
    }

    public function store(Request $request)
{
    // dd($request->all()); // Debug: lihat data yang dikirim
    
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
        'jenis' => 'required|string',
        'status' => 'nullable|string',
       
        'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
    ]);


    $cuti = new Cuti();
    $cuti->user_id = $request->user_id;
    $cuti->tanggal_mulai = $request->tanggal_mulai;
    $cuti->tanggal_selesai = $request->tanggal_selesai;
    $cuti->jenis = $request->jenis;
    $cuti->status = $request->status ?? 'Pending'; // Default status

    if ($request->hasFile('file')) {
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);
        $cuti->file = $fileName;
    }

    $cuti->save();

    return redirect()->route('cuti.index')->with('success', 'Pengajuan cuti berhasil disimpan!');
}

    public function edit(Cuti $cuti)
    {
        // Hanya admin yang bisa edit
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('admin.cuti.edit', compact('cuti'));
    }

    public function update(Request $request, Cuti $cuti)
    {
        // Hanya admin yang bisa update
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }
        
        $request->validate([
            'jenis' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'alasan' => 'required|string',
            'status' => 'nullable|in:Pending,Approved,Rejected',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Hitung ulang durasi jika tanggal berubah TANPA Carbon
        if ($request->tanggal_selesai) {
            $mulai = strtotime($request->tanggal_mulai);
            $selesai = strtotime($request->tanggal_selesai);
            $diff = $selesai - $mulai;
            $cuti->durasi = floor($diff / (60 * 60 * 24)) + 1;
        } else {
            $cuti->durasi = null;
        }

        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($cuti->file && file_exists(public_path('uploads/' . $cuti->file))) {
                unlink(public_path('uploads/' . $cuti->file));
            }
            
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $cuti->file = $fileName;
        }

        $cuti->jenis = $request->jenis;
        $cuti->tanggal_mulai = $request->tanggal_mulai;
        $cuti->tanggal_selesai = $request->tanggal_selesai;
        $cuti->alasan = $request->alasan;
        
        if ($request->status) {
            $cuti->status = $request->status;
        }
        
        $cuti->save();

        return redirect()->route('cuti.index')->with('success', 'Pengajuan cuti berhasil diperbarui!');
    }

    public function destroy(Cuti $cuti)
    {
        // Hanya admin yang bisa hapus
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }
        
        // Hapus file jika ada
        if ($cuti->file && file_exists(public_path('uploads/' . $cuti->file))) {
            unlink(public_path('uploads/' . $cuti->file));
        }
        
        $cuti->delete();
        
        return redirect()->route('cuti.index')->with('success', 'Pengajuan cuti berhasil dihapus!');
    }

    // Hanya admin yang bisa approve
public function approve(Cuti $cuti)
{
    if (!auth()->user()->hasRole('admin')) {
        abort(403);
    }

    $cuti->status = 'Approved';
    $cuti->save();

    return redirect()->back()->with('success', 'Cuti berhasil di-approve!');
}

// Hanya admin yang bisa reject
public function reject(Cuti $cuti)
{
    if (!auth()->user()->hasRole('admin')) {
        abort(403);
    }

    $cuti->status = 'Rejected';
    $cuti->save();

    return redirect()->back()->with('success', 'Cuti berhasil di-reject!');
}

}