<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SponsorController extends Controller
{
    public function index()
    {
        $konten = HomePage::first();

        $sponsors = Sponsor::all();
        return view('admin.sponsor.index', compact('sponsors', 'konten'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sponsor' => 'required|string|max:255',

            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = 'images/sponsor/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/sponsor'), $path);
        }

        Sponsor::create([
            'nama_sponsor' => $request->nama_sponsor,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.sponsor.index')->with('success', 'sponsor berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sponsor' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);

        $sponsor = Sponsor::findOrFail($id);

        $path = $sponsor->gambar;
        if ($request->hasFile('gambar')) {
            if ($path && File::exists(public_path($path))) {
                File::delete(public_path($path));
            }

            $image = $request->file('gambar');
            $path = 'images/sponsor/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/sponsor'), $path);
        }

        $sponsor->update([
            'nama_sponsor' => $request->nama_sponsor,

            'gambar' => $path,
        ]);

        return redirect()->route('admin.sponsor.index')->with('success', 'sponsor berhasil diupdate.');
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);

        // Hapus gambar jika ada
        if ($sponsor->gambar && File::exists(public_path($sponsor->gambar))) {
            unlink(public_path($sponsor->gambar)); // Menghapus file gambar
        }

        // Hapus data sponsor
        $sponsor->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.sponsor.index')->with('success', 'sponsor berhasil dihapus.');
    }
}
