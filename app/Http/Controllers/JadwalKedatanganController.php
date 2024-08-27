<?php

namespace App\Http\Controllers;

use App\Models\JadwalKedatangan;
use App\Models\RuteLokasi;
use Illuminate\Http\Request;
use App\Models\HomePage;

class JadwalKedatanganController extends Controller
{
  public function index()
  {
    $konten = HomePage::first();

    $jadwalKedatangan = JadwalKedatangan::with('ruteLokasi')->get();
    $ruteLokasi = RuteLokasi::all();
    return view('admin.jadwal_kedatangan.index', compact('jadwalKedatangan', 'ruteLokasi', 'konten'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'id_rute' => 'required|exists:rute_lokasi,id',
      'jam_kedatangan' => 'required|date_format:H:i',
    ]);

    JadwalKedatangan::create($request->all());

    return redirect()->route('admin.jadwal_kedatangan.index')->with('success', 'Jadwal kedatangan berhasil ditambahkan.');
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'id_rute' => 'required|exists:rute_lokasi,id',
      'jam_kedatangan' => 'required|date_format:H:i',
    ]);

    $jadwal = JadwalKedatangan::findOrFail($id);
    $jadwal->update($request->all());

    return redirect()->route('admin.jadwal_kedatangan.index')->with('success', 'Jadwal kedatangan berhasil diperbarui.');
  }

  public function destroy($id)
  {
    $jadwal = JadwalKedatangan::findOrFail($id);
    $jadwal->delete();

    return redirect()->route('admin.jadwal_kedatangan.index')->with('success', 'Jadwal kedatangan berhasil dihapus.');
  }
}
