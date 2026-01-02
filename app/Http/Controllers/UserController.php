<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dataKaryawan = Karyawan::all();
        $dataUser = User::orderBy('user_id', 'desc')->paginate(10);
        // dd(Karyawan::all());
        return view('user.index', compact('dataUser'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'role' => 'required',
        'status' => 'required',
    ]);

    User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
        'status' => $request->status,
    ]);

    return redirect()->route('user.index')
        ->with('success', 'User berhasil dibuat');
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
        return view('admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawan_id = $id;
    $karyawan = Karyawan::findOrFail($karyawan_id);

    $karyawan->nama = $request->nama;
    $karyawan->birthday = $request->birthday;
    $karyawan->divisi = $request->divisi;
    $karyawan->jabatan = $request->jabatan;
    $karyawan->gender = $request->gender;
    $karyawan->email = $request->email;
    $karyawan->phone = $request->phone;

    $karyawan->save();
    return redirect()->route('admin.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->delete();
        return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus');
    }
}
