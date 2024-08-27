<?php

namespace App\Http\Controllers;

use App\Models\MobilElf;
use App\Models\DetailElf;
use App\Models\RuteLokasi;
use App\Models\JadwalKeberangkatan;
use App\Models\JadwalKedatangan;
use Illuminate\Http\Request;
use App\Models\HomePage;

class MobilElfController extends Controller
{
  // Menampilkan daftar Mobil Elf
  public function index()
  {
    // Ambil data yang diperlukan
    $mobilElfs = MobilElf::with('detailElf.ruteLokasi', 'detailElf.gambar', 'jadwalKeberangkatan', 'jadwalKedatangan')->get();
    $konten = HomePage::first();

    // Kirim data ke view
    return view('admin.mobil_elf.index', [
      'mobilElfs' => $mobilElfs,
      'konten' => $konten
    ]);
  }
  public function cariMobilElf(Request $request)
  {
    $lokasiAwal = $request->input('lokasi_awal');
    $lokasiTujuan = $request->input('lokasi_tujuan');
    $konten = HomePage::first();
    $rute = RuteLokasi::all();
    $query = MobilElf::query();

    // Filter berdasarkan Lokasi Awal
    if ($lokasiAwal) {
      $query->whereHas('jadwalKeberangkatan.ruteLokasi', function ($q) use ($lokasiAwal) {
        $q->where('id_rute', $lokasiAwal);
      });
    }

    // Filter berdasarkan Lokasi Tujuan
    if ($lokasiTujuan) {
      $query->whereHas('jadwalKedatangan.ruteLokasi', function ($q) use ($lokasiTujuan) {
        $q->where('id_rute', $lokasiTujuan);
      });
    }

    // Mendapatkan hasil pencarian
    $hasilPencarian = $query->get();

    // Menampilkan hasil pencarian ke view
    return view('landing-page.beranda.hasil-pencarian', compact('hasilPencarian', 'konten', 'rute'));
  }
  public function detailElf($id)
  {
    $konten = HomePage::first();

    $mobilElf = MobilElf::findOrFail($id);
    return view('landing-page.beranda.detail-elf', compact('mobilElf', 'konten'));
  }











  public function create()
  {
    $detailElfs = DetailElf::all();
    $jadwalKeberangkatan = JadwalKeberangkatan::all();
    $jadwalKedatangan = JadwalKedatangan::all();
    $konten = HomePage::first();

    return view('admin.mobil_elf.create', compact('detailElfs', 'jadwalKeberangkatan', 'jadwalKedatangan', 'konten'));
  }

  // Menyimpan Mobil Elf baru
  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required|string|max:255',
      'id_detailelf' => 'required|exists:detail_elf,id',
      'nama_sopir' => 'required|string|max:255',
      'nohp_sopir' => 'required|string|max:15',
      'id_jadwal_keberangkatan' => 'required|exists:jadwal_keberangkatan,id',
      'id_jadwal_kedatangan' => 'required|exists:jadwal_kedatangan,id',
      'harga' => 'required|numeric',
      'status_keberangkatan' => 'required|in:berangkat,belum berangkat,selesai'
    ]);

    MobilElf::create($request->all());

    return redirect()->route('admin.mobil_elf.index')->with('success', 'Mobil Elf berhasil ditambahkan.');
  }


  // Menampilkan form untuk mengedit Mobil Elf
  public function edit($id)
  {
    $konten = HomePage::first();

    $mobilElf = MobilElf::findOrFail($id);
    $detailElfs = DetailElf::all();
    $jadwalKeberangkatan = JadwalKeberangkatan::all();
    $jadwalKedatangan = JadwalKedatangan::all();

    return view('admin.mobil_elf.edit', compact('mobilElf', 'detailElfs', 'jadwalKeberangkatan', 'jadwalKedatangan', 'konten'));
  }


  public function update(Request $request, $id)
  {
    $request->validate([
      'nama' => 'required|string|max:255',
      'id_detailelf' => 'required|exists:detail_elf,id',
      'nama_sopir' => 'required|string|max:255',
      'nohp_sopir' => 'required|string|max:15',
      'id_jadwal_keberangkatan' => 'required|exists:jadwal_keberangkatan,id',
      'id_jadwal_kedatangan' => 'required|exists:jadwal_kedatangan,id',
      'harga' => 'required|numeric',
      'status_keberangkatan' => 'required|in:berangkat,belum berangkat,selesai'
    ]);

    $mobilElf = MobilElf::findOrFail($id);
    $mobilElf->update($request->all());

    return redirect()->route('admin.mobil_elf.index')->with('success', 'Mobil Elf berhasil diperbarui.');
  }

  public function destroy($id)
  {
    $mobilElf = MobilElf::findOrFail($id);
    $mobilElf->delete();

    return redirect()->route('admin.mobil_elf.index')->with('success', 'Mobil Elf berhasil dihapus.');
  }
}
