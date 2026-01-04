<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $dataKaryawan = Division::all();
        return view('admin.divisi.index', compact('dataKaryawan'));
    }

    public function create()
    {
        return view('admin.divisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required'
        ]);

        Division::create($request->all());
        return redirect()->route('divisi.index')->with('success','Divisi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id);
        return view('admin.divisi.edit', compact('division'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_divisi' => 'required',
    ]);

    $divisi = Division::findOrFail($id);
    $divisi->update($request->all());

    return redirect()
        ->route('divisi.index')
        ->with('success', 'Divisi berhasil diupdate');
}


    public function destroy($id)
    {
        Division::findOrFail($id)->delete();
        return redirect()->route('divisi.index')->with('success','Divisi berhasil dihapus');
    }
}
