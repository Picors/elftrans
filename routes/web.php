<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MobilElfController;
use App\Http\Controllers\DetailElfController;
use App\Http\Controllers\RuteLokasiController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\JadwalKedatanganController;
use App\Http\Controllers\JadwalKeberangkatanController;
use App\Http\Controllers\PesanPelangganController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// landing page
Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [HomeController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog', 'blog.detail');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak/store', [HomeController::class, 'storePesan'])->name('kontak.store');
Route::get('/blog/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/blog/{id}', [HomeController::class, 'show'])->name('blog.show');
Route::get('/mobil-elf/search', [HomeController::class, 'search'])->name('mobilElf.search');
Route::get('/cari-mobil-elf', [MobilElfController::class, 'cariMobilElf'])->name('cari_mobil_elf');
Route::get('/detail-elf/{id}', [MobilElfController::class, 'detailElf'])->name('mobilElf.detail');

// Dashboard User
Route::get('/ticket', [HomeController::class, 'ticket']);
Route::get('/chair', [HomeController::class, 'chair']);
Route::get('/seat', [HomeController::class, 'seat']);
Route::get('/payment', [HomeController::class, 'payment']);
Route::get('/transfer', [HomeController::class, 'transfer']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/detail-tiket', [HomeController::class, 'detailTiket']);

Route::get('/profil', function () {
    return view('dasboard.profil.profil');
});

Route::get('/ubah-password', function () {
    return view('dasboard.ubah-password.ubah-password');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;

// Rute untuk menampilkan form login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk memproses login
Route::post('login', [AuthController::class, 'login'])->name('login.submit');



// Rute untuk logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk menampilkan formulir lupa password
Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');

// Route untuk mengirim link reset password
Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');

// Route untuk menampilkan formulir reset password
Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');

// Route untuk memproses reset password
Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/home_page', [HomePageController::class, 'edit'])->name('admin.home_page.index');
    Route::put('admin/home_page', [HomePageController::class, 'update'])->name('admin.home_page.update');

    Route::get('admin/edit_profile', [AdminProfileController::class, 'edit'])->name('admin.edit_profile');
    Route::put('admin/edit_profile', [AdminProfileController::class, 'update'])->name('admin.edit_profile.update');

    Route::get('/admin/rute_lokasi', [RuteLokasiController::class, 'index'])->name('admin.rute_lokasi.index');
    Route::post('/admin/rute_lokasi', [RuteLokasiController::class, 'store'])->name('admin.rute_lokasi.store');
    Route::put('/admin/rute_lokasi/{id}', [RuteLokasiController::class, 'update'])->name('admin.rute_lokasi.update');
    Route::delete('/admin/rute_lokasi/{id}', [RuteLokasiController::class, 'destroy'])->name('admin.rute_lokasi.destroy');


    Route::get('/admin/jadwal_keberangkatan', [JadwalKeberangkatanController::class, 'index'])->name('admin.jadwal_keberangkatan.index');
    Route::post('/admin/jadwal_keberangkatan', [JadwalKeberangkatanController::class, 'store'])->name('admin.jadwal_keberangkatan.store');
    Route::put('/admin/jadwal_keberangkatan/{id}', [JadwalKeberangkatanController::class, 'update'])->name('admin.jadwal_keberangkatan.update');
    Route::delete('/admin/jadwal_keberangkatan/{id}', [JadwalKeberangkatanController::class, 'destroy'])->name('admin.jadwal_keberangkatan.destroy');

    Route::get('/admin/jadwal_kedatangan', [JadwalKedatanganController::class, 'index'])->name('admin.jadwal_kedatangan.index');
    Route::post('/admin/jadwal_kedatangan', [JadwalKedatanganController::class, 'store'])->name('admin.jadwal_kedatangan.store');
    Route::put('/admin/jadwal_kedatangan/{id}', [JadwalKedatanganController::class, 'update'])->name('admin.jadwal_kedatangan.update');
    Route::delete('/admin/jadwal_kedatangan/{id}', [JadwalKedatanganController::class, 'destroy'])->name('admin.jadwal_kedatangan.destroy');

    Route::get('/admin/detail_elf', [DetailElfController::class, 'index'])->name('admin.detail_elf.index');
    Route::post('/admin/detail_elf', [DetailElfController::class, 'store'])->name('admin.detail_elf.store');
    Route::put('/admin/detail_elf/{id}', [DetailElfController::class, 'update'])->name('admin.detail_elf.update');
    Route::delete('/admin/detail_elf/{id}', [DetailElfController::class, 'destroy'])->name('admin.detail_elf.destroy');
    Route::post('/admin/detail-elf/upload-images', [DetailElfController::class, 'upload'])->name('upload_images');
    Route::get('/admin/detail_elf/create', [DetailElfController::class, 'create'])->name('admin.detail_elf.create');
    Route::get('/admin/detail_elf/{id}/edit', [DetailElfController::class, 'edit'])->name('admin.detail_elf.edit');

    Route::get('/admin/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::post('/admin/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::put('/admin/faqs/{id}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/admin/faqs/{id}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');

    Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::post('/admin/blog', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::put('/admin/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    Route::get('/admin/sponsor', [SponsorController::class, 'index'])->name('admin.sponsor.index');
    Route::post('/admin/sponsor', [SponsorController::class, 'store'])->name('admin.sponsor.store');
    Route::put('/admin/sponsor/{id}', [SponsorController::class, 'update'])->name('admin.sponsor.update');
    Route::delete('/admin/sponsor/{id}', [SponsorController::class, 'destroy'])->name('admin.sponsor.destroy');

    Route::get('/admin/mobil_elf', [MobilElfController::class, 'index'])->name('admin.mobil_elf.index');
    Route::post('/admin/mobil_elf', [MobilElfController::class, 'store'])->name('admin.mobil_elf.store');
    Route::put('/admin/mobil_elf/{id}', [MobilElfController::class, 'update'])->name('admin.mobil_elf.update');
    Route::delete('/admin/mobil_elf/{id}', [MobilElfController::class, 'destroy'])->name('admin.mobil_elf.destroy');
    Route::get('/admin/mobil_elf/create', [MobilElfController::class, 'create'])->name('admin.mobil_elf.create');

    Route::get('/admin/mobil_elf/{id}/edit', [MobilElfController::class, 'edit'])->name('admin.mobil_elf.edit');

    Route::get('/admin/pesan_pelanggan', [PesanPelangganController::class, 'index'])->name('admin.pesan_pelanggan.index');
    Route::post('/admin/pesan_pelanggan', [PesanPelangganController::class, 'store'])->name('admin.pesan_pelanggan.store');
    Route::put('/admin/pesan_pelanggan/{id}', [PesanPelangganController::class, 'update'])->name('admin.pesan_pelanggan.update');
    Route::delete('/admin/pesan_pelanggan/{id}', [PesanPelangganController::class, 'destroy'])->name('admin.pesan_pelanggan.destroy');
    Route::get('/admin/pesan_pelanggan/create', [PesanPelangganController::class, 'create'])->name('admin.pesan_pelanggan.create');

    Route::get('/admin/pesan_pelanggan/{id}/edit', [PesanPelangganController::class, 'edit'])->name('admin.pesan_pelanggan.edit');
      Route::post('/admin/update-status', [AdminController::class, 'updateStatus'])->name('admin.update_status');
});
