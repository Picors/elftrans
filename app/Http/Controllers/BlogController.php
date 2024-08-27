<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $konten = HomePage::first();

        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs', 'konten'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = 'images/blog/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog'), $path);
        }

        Blog::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        ]);

        $blog = Blog::findOrFail($id);

        $path = $blog->gambar;
        if ($request->hasFile('gambar')) {
            if ($path && File::exists(public_path($path))) {
                File::delete(public_path($path));
            }

            $image = $request->file('gambar');
            $path = 'images/blog/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog'), $path);
        }

        $blog->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil diupdate.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Hapus gambar jika ada
        if ($blog->gambar && File::exists(public_path($blog->gambar))) {
            unlink(public_path($blog->gambar)); // Menghapus file gambar
        }

        // Hapus data blog
        $blog->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil dihapus.');
    }
}
