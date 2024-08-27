<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanPelanggan;
use App\Models\HomePage;

class PesanPelangganController extends Controller
{

  public function index()
  {
    $konten = HomePage::first();
    $pesan = PesanPelanggan::all();

    return view('admin.pesan_pelanggan.index', compact('pesan', 'konten'));
  }
  public function store(Request $request)
  {
    // Validasi data yang diterima
    $request->validate([
      'nama' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'subjek' => 'required|string|max:255',
      'pesan' => 'required|string',
    ]);

    // Simpan pesan ke dalam database
    PesanPelanggan::create([
      'nama' => $request->nama,
      'email' => $request->email,
      'subjek' => $request->subjek,
      'pesan' => $request->pesan,
    ]);

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
  }
  public function destroy($id)
  {
    // Temukan pesan berdasarkan ID atau gagal jika tidak ditemukan
    $pesan = PesanPelanggan::findOrFail($id);

    // Hapus pesan
    $pesan->delete();

    // Redirect kembali ke halaman yang sama dengan pesan sukses
    return redirect()->route('admin.pesan_pelanggan.index')->with('success', 'Pesan berhasil dihapus.');
  }
}
