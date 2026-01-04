<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.user.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 🔥 AUTO STAFF
        $user->assignRole('staff');

        return redirect()->route('user.index')
            ->with('success', 'Staff berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         $data['dataKaryawan'] = Karyawan::findOrFail($id);
//         return view('admin.edit', $data);
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $karyawan_id = $id;
//     $karyawan = Karyawan::findOrFail($karyawan_id);

//     $karyawan->nama = $request->nama;
//     $karyawan->birthday = $request->birthday;
//     $karyawan->divisi = $request->divisi;
//     $karyawan->jabatan = $request->jabatan;
//     $karyawan->gender = $request->gender;
//     $karyawan->email = $request->email;
//     $karyawan->phone = $request->phone;

//     $karyawan->save();
//     return redirect()->route('admin.index')->with('success', 'Perubahan Data Berhasil!');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
public function destroy(User $user)
{
    
    if ($user->hasRole('admin')) {
        return back()->with('error', 'Admin tidak bisa dihapus');
    }

    // Hapus semua role
    $user->syncRoles([]);

    // Hapus user
    $user->delete();

    return redirect()->route('user.index')
        ->with('success', 'Akun berhasil dihapus');
}
}
