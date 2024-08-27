<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

use App\Models\DetailElf;
use App\Models\RuteLokasi;
use Illuminate\Http\Request;

class DetailElfController extends Controller
{
  public function index()
  {
    $konten = HomePage::first();

    $ruteLokasis = RuteLokasi::all();
    $detailElfs = DetailElf::with(['ruteLokasi', 'gambar'])->get();
    return view('admin.detail_elf.index', compact('detailElfs', 'ruteLokasis', 'konten'));
  }
  public function create()
  {
    $konten = HomePage::first();

    $ruteLokasis = RuteLokasi::all();
    return view('admin.detail_elf.create', compact('ruteLokasis', 'konten'));
  }

  public function edit($id)
  {
    $konten = HomePage::first();

    $detailElf = DetailElf::findOrFail($id);
    $ruteLokasis = RuteLokasi::all();
    $detailElfRutes = $detailElf->ruteLokasi->pluck('id')->toArray();
    $detailElfGambars = $detailElf->gambar;
    return view('admin.detail_elf.edit', compact('konten', 'detailElf', 'ruteLokasis', 'detailElfRutes', 'detailElfGambars'));
  }


  public function store(Request $request)
  {
    $request->validate([
      'nama_mobil' => 'required|string|max:255',
      'plat_nomor' => 'required|string|max:15',
      'rute_lokasi' => 'required|array',
      'rute_lokasi.*' => 'exists:rute_lokasi,id',
      'gambar' => 'nullable|array',
      'gambar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $detailElf = DetailElf::create($request->only('nama_mobil', 'plat_nomor'));

    // Attach rute
    $detailElf->ruteLokasi()->attach($request->rute_lokasi);

    // Attach gambar
    if ($request->hasFile('gambar')) {
      foreach ($request->file('gambar') as $image) {
        $imagePath = 'uploads/' . time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imagePath);
        $detailElf->gambar()->create(['path' => $imagePath]);
      }
    }

    return redirect()->route('admin.detail_elf.index')->with('success', 'Detail elf berhasil ditambahkan.');
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'nama_mobil' => 'required|string|max:255',
      'plat_nomor' => 'required|string|max:15',
      'rute_lokasi' => 'required|array',
      'rute_lokasi.*' => 'exists:rute_lokasi,id',
      'gambar' => 'nullable|array',
      'gambar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'existing_images_to_delete' => 'nullable|array',
    ]);

    $detailElf = DetailElf::findOrFail($id);

    // Update detailElf dengan input dari form
    $detailElf->update($request->only('nama_mobil', 'plat_nomor'));

    // Sinkronkan rute: menambah dan menghapus rute yang ada
    $detailElf->ruteLokasi()->sync($request->rute_lokasi);

    // Menangani penghapusan gambar yang dipilih untuk dihapus
    if ($request->filled('existing_images_to_delete')) {
      foreach ($request->existing_images_to_delete as $imagePath) {
        // Hapus dari public/uploads dan database
        $image = $detailElf->gambar()->where('path', $imagePath)->first();
        if ($image) {
          unlink(public_path($image->path));
          $image->delete();
        }
      }
    }

    // Menangani gambar baru
    if ($request->hasFile('gambar')) {
      foreach ($request->file('gambar') as $image) {
        $imagePath = 'uploads/' . time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imagePath);
        $detailElf->gambar()->create(['path' => $imagePath]);
      }
    }

    return redirect()->route('admin.detail_elf.index')->with('success', 'Detail elf berhasil diperbarui.');
  }



  public function destroy($id)
  {
    $detailElf = DetailElf::findOrFail($id);

    // Hapus gambar terkait
    foreach ($detailElf->gambar as $gambar) {
      if (file_exists(public_path($gambar->path))) {
        unlink(public_path($gambar->path));
      }
      $gambar->delete();
    }

    // Hapus detail elf
    $detailElf->delete();

    return redirect()->route('admin.detail_elf.index')->with('success', 'Detail elf berhasil dihapus.');
  }
}
