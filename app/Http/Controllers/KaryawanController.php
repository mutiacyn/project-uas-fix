<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $dataKaryawan = Karyawan::orderBy('karyawan_id', 'desc')->paginate(10);
    $user = Auth::user();

    return view('admin.karyawan.index', compact('dataKaryawan', 'user'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name'   => 'required',
        'email'  => 'required|email',
        'divisi' => 'required',
    ]);

    // USER
    $user = User::firstOrCreate(
        ['email' => $request->email], // cek berdasarkan email
        [
            'name'     => $request->name,
            'password' => Hash::make('password123'), // default
        ]
    );

    // KARYAWAN $karyawan->birthday = $request->birthday;
    Karyawan::create([
        'user_id' => $user->id,
        'birthday' => $request->birthday,
        'divisi'  => $request->divisi,
        'jabatan' => $request->jabatan,
        'gender'  => $request->gender,
        'phone'   => $request->phone,
    ]);

    return redirect()->route('karyawan.index')
    ->with('success', 'Data berhasil disimpan');

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
    public function edit(string $id)
    {
        $data['dataKaryawan'] = Karyawan::findOrFail($id);
        return view('admin.karyawan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawan_id = $id;
    $karyawan = Karyawan::findOrFail($karyawan_id);

    // $karyawan->nama = $request->nama;
    $karyawan->birthday = $request->birthday;
    $karyawan->divisi = $request->divisi;
    $karyawan->jabatan = $request->jabatan;
    $karyawan->gender = $request->gender;
    // $karyawan->email = $request->email;
    $karyawan->phone = $request->phone;

    $karyawan->save();
    return redirect()->route('karyawan.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus');
    }
}
