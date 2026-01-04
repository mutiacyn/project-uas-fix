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
    public function index()
{
    $karyawans = Karyawan::with(['user','divisi','jabatan'])->get();
    return view('admin.karyawan.index', compact('karyawans'));
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
            // 'karyawan_id' => 'required|exists:users,id',
            'user_id' => 'required|exists:users,id',
            'birthday' => 'required|date',
            'divisi_id' => 'required|exists:divisions,id', // <-- ganti 'division' jadi 'divisions'
            'jabatan_id' => 'required|exists:positions,id', // pastikan sesuai nama tabel jabatan
            'gender' => 'required',
            'phone' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);
              

        Karyawan::create([
            // 'karyawan_id' => $request->karyawan_id,
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



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
{
    // $users = User::all(); // Ambil semua user
    $users = User::role('staff')->get();
    $divisions = Division::all(); // Ambil semua divisi
    $positions = Position::all(); // Ambil semua jabatan

    return view('admin.karyawan.edit', compact('karyawan', 'users', 'divisions', 'positions'));
}



    /**
     * Update the specified resource in storage.
     */
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
{
    $karyawan->delete();

    return back()->with('success','Data karyawan dihapus');
}
}
