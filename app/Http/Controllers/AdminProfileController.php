<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    // Tampilkan form edit profil
    public function edit()
    {
        $konten = HomePage::first();
        $user = Auth::user();
        return view('admin.edit_profile.index', compact('user', 'konten'));
    }

    // Proses update profil
    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'nomor' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
            'password_confirmation' => 'nullable|string|min:8',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        // Update data user
        $user->username = $request->username;
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;
        $user->nomor = $request->nomor;
        $user->email = $request->email;

        // Update password jika ada
        if ($request->filled('password')) {
            $user->password = $request->password; // Setter di model akan menghash password
        }

        // Update foto profil
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto && file_exists(public_path('uploads/' . $user->foto))) {
                unlink(public_path('uploads/' . $user->foto));
            }

            // Simpan foto baru
            $foto = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('uploads'), $foto);

            $user->foto = $foto;
        }

        $user->save();

        return redirect()->route('admin.edit_profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
