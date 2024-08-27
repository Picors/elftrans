<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $konten = HomePage::first();

        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs', 'konten'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        Faq::create($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ berhasil diupdate.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ berhasil dihapus.');
    }
}
