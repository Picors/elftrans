<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\PesanPelanggan;
use App\Models\Sponsor;
use App\Models\JadwalKeberangkatan;
use App\Models\JadwalKedatangan;
use App\Models\MobilElf;
use App\Models\RuteLokasi;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        $konten = HomePage::first();
        $sponsor = Sponsor::all();
        $rute = RuteLokasi::all();

        $latestBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('landing-page.beranda.beranda', compact('konten', 'sponsor', 'latestBlogs', 'rute'));
    }
    public function search(Request $request)
    {
        // Ambil parameter pencarian
        $lokasiAwal = $request->input('lokasi_awal');
        $lokasiTujuan = $request->input('lokasi_tujuan');
        $tanggal = $request->input('tanggal');
        $konten = HomePage::first();

        // Filter data berdasarkan parameter pencarian
        $mobilElfs = MobilElf::query()
            // Filter berdasarkan jadwal keberangkatan dan lokasi awal
            ->whereHas('jadwalKeberangkatan', function ($query) use ($lokasiAwal) {
                $query->whereHas('ruteLokasi', function ($query) use ($lokasiAwal) {
                    $query->where('nama_tempat', 'like', "%$lokasiAwal%");
                });
            })
            // Filter berdasarkan jadwal kedatangan dan lokasi tujuan
            ->whereHas('jadwalKedatangan', function ($query) use ($lokasiTujuan) {
                $query->whereHas('ruteLokasi', function ($query) use ($lokasiTujuan) {
                    $query->where('nama_tempat', 'like', "%$lokasiTujuan%");
                });
            })
            // Filter berdasarkan status keberangkatan
            ->where('status_keberangkatan', 'Belum Berangkat')
            // Filter berdasarkan tanggal created_at atau updated_at
            ->where(function ($query) use ($tanggal) {
                $query->whereDate('created_at', $tanggal)
                    ->orWhereDate('updated_at', $tanggal);
            })
            ->get();

        // Kirim data ke view
        return view('dasboard.ticket.ticket', compact('mobilElfs', 'konten'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $konten = HomePage::first();

        return view('landing-page.beranda.show', compact('blog', 'konten'));
    }


    public function tentangKami()
    {
        $konten = HomePage::first();

        return view('landing-page.about.about', compact('konten'));
    }

    public function blog()
    {
        $konten = HomePage::first();
        $blogs = Blog::paginate(6); // Pagination dengan 6 item per halaman

        return view('landing-page.blog.blog', compact('konten', 'blogs'));
    }
    public function blogDetail($id)
    {
        $konten = HomePage::first();
        $blog = Blog::findOrFail($id);

        return view('landing-page.beranda.show', compact('konten', 'blog'));
    }


    public function faqs()
    {
        $konten = HomePage::first();
        $faqs = Faq::all();
        return view('landing-page.faqs.faqs', compact('konten', 'faqs'));
    }

    public function kontak()
    {
        $konten = HomePage::first();

        return view('landing-page.contact.contact', compact('konten'));
    }
    public function storePesan(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Cek jumlah pesan yang telah dikirim oleh email ini
        $jumlahPesan = PesanPelanggan::where('email', $request->email)->count();

        // Batas maksimal pesan yang bisa dikirim (misalnya 2)
        $batasPesan = 2;

        if ($jumlahPesan >= $batasPesan) {
            // Jika sudah mencapai batas, berikan pesan error
            return redirect()->back()->withErrors(['email' => 'Anda telah mencapai batas maksimal pengiriman pesan.']);
        }

        // Simpan pesan ke database
        PesanPelanggan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim.');
    }

    // Dashboard User
    public function ticket()
    {
        $konten = HomePage::first();

        return view('dasboard.ticket.ticket', compact('konten'));
    }

    public function chair()
    {
        $konten = HomePage::first();

        return view('dasboard.chair.chair', compact('konten'));
    }

    public function seat()
    {
        $konten = HomePage::first();

        return view('dasboard.seat.seat', compact('konten'));
    }

    public function payment()
    {
        $konten = HomePage::first();

        return view('dasboard.payment.payment', compact('konten'));
    }

    public function transfer()
    {
        $konten = HomePage::first();

        return view('dasboard.transfer.transfer', compact('konten'));
    }

    public function dashboard()
    {
        $konten = HomePage::first();

        return view('dasboard.dashboard.dashboard', compact('konten'));
    }

    public function detailTiket()
    {
        $konten = HomePage::first();

        return view('dasboard.detail-tiket.detail-tiket', compact('konten'));
    }
}
