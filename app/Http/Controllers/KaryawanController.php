<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
   public function index(Request $request) 
    {
        $karyawan = Karyawan::with('departemen')->get();
        return view('index', compact('karyawan'));
    }

    public function store(Request $request)
    {

        Karyawan::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
        ]);

        return redirect('/karyawan');
    }

    public function update (Request $request, $ID)
    {
        $karyawan = Karyawan::findOrFail($ID);
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required'
        ]);

        $karyawan->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi
        ]);

        return redirect('/karyawan');
    }

    public function destroy($ID){
        Karyawan::destroy($ID);
        
        return redirect ('/karyawan');
    }

    public function show()
    {
        return view('tambah');
    }

    public function edit($ID)
    {
        $karyawan = Karyawan::findOrFail($ID);
        return view('edit', ['karyawan' => $karyawan]);
    }

    public function cari(Request $request)
    {
        // Ambil input dari name="cari"
        $search = $request->input('cari');

        // Cari data karyawan berdasarkan nama yang mirip (LIKE)
        $karyawan = Karyawan::with('departemen')
                    ->where('nama', 'like', '%' . $search . '%')
                    ->get();

        // Kirim hasil ke view cari.blade.php
        return view('cari', compact('karyawan'));
    }
}
