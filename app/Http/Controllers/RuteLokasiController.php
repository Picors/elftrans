<?php

namespace App\Http\Controllers;

use App\Models\RuteLokasi;
use Illuminate\Http\Request;
use App\Models\HomePage;

class RuteLokasiController extends Controller
{
    // Tampilkan daftar rute lokasi
    public function index()
    {
        $konten = HomePage::first();

        $ruteLokasis = RuteLokasi::all();
        return view('admin.rute_lokasi.index', compact('ruteLokasis', 'konten'));
    }

    // Simpan data rute lokasi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
        ]);

        RuteLokasi::create($request->all());

        return redirect()->route('admin.rute_lokasi.index')->with('success', 'Rute lokasi berhasil ditambahkan.');
    }

    // Update data rute lokasi
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
        ]);

        $ruteLokasi = RuteLokasi::findOrFail($id);
        $ruteLokasi->update($request->all());

        return redirect()->route('admin.rute_lokasi.index')->with('success', 'Rute lokasi berhasil diperbarui.');
    }

    // Hapus data rute lokasi
    public function destroy($id)
    {
        $ruteLokasi = RuteLokasi::findOrFail($id);
        $ruteLokasi->delete();

        return redirect()->route('admin.rute_lokasi.index')->with('success', 'Rute lokasi berhasil dihapus.');
    }
}
