<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\Position;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // 1. Siapkan Query Builder (belum dieksekusi/get)
        // Kita gunakan 'with' untuk eager loading agar performa cepat
        $query = Karyawan::with(['user', 'divisi', 'jabatan']);

        // 2. Logika SEARCH (Mencari Nama atau Email di tabel Users)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('user', function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // 3. Logika FILTER DIVISI
        if ($request->filled('divisi_id')) {
            $query->where('divisi_id', $request->divisi_id);
        }

        // 4. Logika FILTER JABATAN
        if ($request->filled('jabatan_id')) {
            $query->where('jabatan_id', $request->jabatan_id);
        }

        // 5. Eksekusi Pagination (10 data per halaman)
        // Gunakan method appends($request->all()) agar filter tidak hilang saat pindah halaman
        $karyawans = $query->paginate(10);

        // 6. Ambil data Divisi dan Jabatan untuk Dropdown Filter di View
        // (Saya namakan variabelnya $divisis dan $jabatans agar sesuai dengan view sebelumnya)
        $divisis = Division::all();
        $jabatans = Position::all();

        return view('admin.karyawan.index', compact('karyawans', 'divisis', 'jabatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua user dengan role staff
        $users = User::role('staff')->get();

        $divisions = Division::all();
        $positions = Position::all();

        return view('admin.karyawan.create', compact('users', 'divisions', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'birthday' => 'required|date',
            'divisi_id' => 'required|exists:divisions,id',
            'jabatan_id' => 'required|exists:positions,id',
            'gender' => 'required',
            'phone' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);

        Karyawan::create([
            'user_id' => $request->user_id,
            'birthday' => $request->birthday,
            'divisi_id' => $request->divisi_id,
            'jabatan_id' => $request->jabatan_id,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    // ... method show, edit, update, destroy biarkan tetap sama ...
    
    public function show(string $id)
    {
        //
    }

    public function edit(Karyawan $karyawan)
    {
        $users = User::role('staff')->get();
        $divisions = Division::all();
        $positions = Position::all();

        return view('admin.karyawan.edit', compact('karyawan', 'users', 'divisions', 'positions'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'divisi_id' => 'required',
            'jabatan_id' => 'required',
            'gender' => 'required',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')
            ->with('success','Data karyawan diperbarui');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return back()->with('success','Data karyawan dihapus');
    }
}