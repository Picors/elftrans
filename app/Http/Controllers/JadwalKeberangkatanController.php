<?php

namespace App\Http\Controllers;

use App\Models\JadwalKeberangkatan;
use App\Models\RuteLokasi;
use Illuminate\Http\Request;
use App\Models\HomePage;

class JadwalKeberangkatanController extends Controller
{
  public function index()
  {
    $konten = HomePage::first();

    $jadwalKeberangkatan = JadwalKeberangkatan::with('ruteLokasi')->get();
    $ruteLokasi = RuteLokasi::all();
    return view('admin.jadwal_keberangkatan.index', compact('jadwalKeberangkatan', 'ruteLokasi', 'konten'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'id_rute' => 'required|exists:rute_lokasi,id',
      'jam_berangkat' => 'required|date_format:H:i',
    ]);

    JadwalKeberangkatan::create($request->all());

    return redirect()->route('admin.jadwal_keberangkatan.index')->with('success', 'Jadwal keberangkatan berhasil ditambahkan.');
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'id_rute' => 'required|exists:rute_lokasi,id',
      'jam_berangkat' => 'required|date_format:H:i',
    ]);

    $jadwal = JadwalKeberangkatan::findOrFail($id);
    $jadwal->update($request->all());

    return redirect()->route('admin.jadwal_keberangkatan.index')->with('success', 'Jadwal keberangkatan berhasil diperbarui.');
  }

  public function destroy($id)
  {
    $jadwal = JadwalKeberangkatan::findOrFail($id);
    $jadwal->delete();

    return redirect()->route('admin.jadwal_keberangkatan.index')->with('success', 'Jadwal keberangkatan berhasil dihapus.');
  }
}
