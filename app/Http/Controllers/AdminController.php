<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\MobilElf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index(Request $request)
  {
    // Ambil status keberangkatan dari request untuk filter
    $status = $request->query('status_keberangkatan');
    $konten = HomePage::first();
    // Query mobil elf dengan kondisi filter status keberangkatan jika ada
    $mobilElfs = MobilElf::when($status, function ($query, $status) {
      return $query->where('status_keberangkatan', $status);
    })->paginate(4); // Pagination dengan 4 item per halaman

    // Mengembalikan view dengan data mobil elf
    return view('admin.dashboard', compact('mobilElfs', 'status', 'konten'));
  }
}
