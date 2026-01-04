<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('admin.jabatan.index', compact('positions'));
    }

    public function create()
    {
        return view('admin.jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required'
        ]);

        Position::create($request->all());
        return redirect()->route('jabatan.index')
            ->with('success','Jabatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $position = Position::findOrFail($id);
        return view('admin.jabatan.edit', compact('position'));
    }

    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);

        $request->validate([
            'nama_jabatan' => 'required'
        ]);

        $position->update($request->all());
        return redirect()->route('jabatan.index')
            ->with('success','Jabatan berhasil diupdate');
    }

    public function destroy($id)
    {
        Position::findOrFail($id)->delete();
        return redirect()->route('jabatan.index')
            ->with('success','Jabatan berhasil dihapus');
    }
}

