<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan; 

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all(); 
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jabatan' => 'required'
        ]);

        Karyawan::create($request->all());
        return redirect('/karyawan')->with('success', 'Data Karyawan berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jabatan' => 'required'
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect('/karyawan')->with('success', 'Data Karyawan berhasil diperbarui!');
    }

   public function destroy(string $id)
    {
        Karyawan::destroy($id);
        return redirect('/karyawan')->with('success', 'Data Karyawan berhasil dihapus!');
    }
}