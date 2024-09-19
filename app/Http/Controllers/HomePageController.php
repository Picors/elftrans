<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageController extends Controller
{
  // Tampilkan form edit
  public function edit()
  {
    $konten = HomePage::first(); // Ambil data pertama dari tabel home_page
    return view('admin.home_page.index', compact('konten'));
  }

  // Proses update data
  public function update(Request $request)
  {
    $request->validate([
      'nama_web' => 'required|string|max:255',
      'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
      'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
      'logo_nav' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
      'tentang_1' => 'required|string',
      'gambar_tentang' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
      'tentang_2' => 'required|string',
      'teks_footer' => 'required|string',
      'no_tlp' => 'required|string|max:15',
      'alamat' => 'required|string',
      'email' => 'required|string|email|max:255',
      'link_google_maps' => 'nullable|string',
      'link_facebook' => 'nullable|string',
      'link_instagram' => 'nullable|string',
      'link_whatsapp' => 'nullable|string',
      'link_tiktok' => 'nullable|string',
    ]);

    $homePage = HomePage::first();

    if ($request->hasFile('logo')) {
      $logo = time() . '.' . $request->logo->getClientOriginalExtension();
      $request->logo->move(public_path('../../uploads'), $logo);
      $homePage->logo = $logo;
    }

    if ($request->hasFile('icon')) {
      $icon = time() . '.' . $request->icon->getClientOriginalExtension();
      $request->icon->move(public_path('../../uploads'), $icon);
      $homePage->icon = $icon;
    }

    if ($request->hasFile('logo_nav')) {
      $logo_nav = time() . '.' . $request->logo_nav->getClientOriginalExtension();
      $request->logo_nav->move(public_path('../../uploads'), $logo_nav);
      $homePage->logo_nav = $logo_nav;
    }

    if ($request->hasFile('gambar_tentang')) {
      $gambar_tentang = time() . '.' . $request->gambar_tentang->getClientOriginalExtension();
      $request->gambar_tentang->move(public_path('../../uploads'), $gambar_tentang);
      $homePage->gambar_tentang = $gambar_tentang;
    }

    $homePage->update($request->except(['logo', 'icon', 'logo_nav', 'gambar_tentang']));

    return redirect()->route('admin.home_page.index')->with('success', 'Data berhasil diperbarui.');
  }
}
