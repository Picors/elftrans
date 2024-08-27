@extends('admin.layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Halaman Utama</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Edit Halaman Utama</h1>

                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <section class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.home_page.update', $konten->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Nama Web -->
                            <div class="form-group">
                                <label for="nama_web">Nama Web</label>
                                <input type="text" name="nama_web" class="form-control"
                                    value="{{ old('nama_web', $konten->nama_web) }}" required>
                            </div>

                            <!-- Logo -->
                            <!-- Logo -->
                            <div class="form-group">
                                <label for="logo">Logo (Format: jpeg, png, jpg, gif, svg | Max: 5MB)</label>
                                <input type="file" name="logo" class="form-control-file">
                                @if ($konten->logo)
                                    <img src="{{ asset('uploads/' . $konten->logo) }}" alt="Logo"
                                        style="width: 100px; margin-top: 10px;">
                                @endif
                            </div>

                            <!-- Icon -->
                            <div class="form-group">
                                <label for="icon">Icon (Format: jpeg, png, jpg, gif, svg | Max: 5MB)</label>
                                <input type="file" name="icon" class="form-control-file">
                                @if ($konten->icon)
                                    <img src="{{ asset('uploads/' . $konten->icon) }}" alt="Icon"
                                        style="width: 100px; margin-top: 10px;">
                                @endif
                            </div>

                            <!-- Logo Nav -->
                            <div class="form-group">
                                <label for="logo_nav">Logo Navigation (Format: jpeg, png, jpg, gif, svg | Max: 5MB)</label>
                                <input type="file" name="logo_nav" class="form-control-file">
                                @if ($konten->logo_nav)
                                    <img src="{{ asset('uploads/' . $konten->logo_nav) }}" alt="Logo Nav"
                                        style="width: 100px; margin-top: 10px;">
                                @endif
                            </div>

                            <!-- Tentang 1 -->
                            <div class="form-group">
                                <label for="tentang_1">Tentang Bagian 1</label>
                                <textarea name="tentang_1" class="form-control" required>{{ old('tentang_1', $konten->tentang_1) }}</textarea>
                            </div>

                            <!-- Gambar Tentang -->
                            <!-- Gambar Tentang -->
                            <div class="form-group">
                                <label for="gambar_tentang">Gambar Tentang (Format: jpeg, png, jpg, gif, svg | Max:
                                    5MB)</label>
                                <input type="file" name="gambar_tentang" class="form-control-file">
                                @if ($konten->gambar_tentang)
                                    <img src="{{ asset('uploads/' . $konten->gambar_tentang) }}" alt="Gambar Tentang"
                                        style="width: 100px; margin-top: 10px;">
                                @endif
                            </div>

                            <!-- Tentang 2 -->
                            <div class="form-group">
                                <label for="tentang_2">Tentang Bagian 2</label>
                                <textarea name="tentang_2" class="form-control" required>{{ old('tentang_2', $konten->tentang_2) }}</textarea>
                            </div>

                            <!-- Teks Footer -->
                            <div class="form-group">
                                <label for="teks_footer">Teks Footer</label>
                                <textarea name="teks_footer" class="form-control" required>{{ old('teks_footer', $konten->teks_footer) }}</textarea>
                            </div>

                            <!-- No. Telepon -->
                            <div class="form-group">
                                <label for="no_tlp">No. Telepon</label>
                                <input type="text" name="no_tlp" class="form-control"
                                    value="{{ old('no_tlp', $konten->no_tlp) }}" required>
                            </div>

                            <!-- Alamat -->
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" class="form-control" required>{{ old('alamat', $konten->alamat) }}</textarea>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $konten->email) }}" required>
                            </div>

                            <!-- Link Google Maps -->
                            <div class="form-group">
                                <label for="link_google_maps">Link Google Maps</label>
                                <input type="text" name="link_google_maps" class="form-control"
                                    value="{{ old('link_google_maps', $konten->link_google_maps) }}">
                            </div>

                            <!-- Link Facebook -->
                            <div class="form-group">
                                <label for="link_facebook">Link Facebook</label>
                                <input type="text" name="link_facebook" class="form-control"
                                    value="{{ old('link_facebook', $konten->link_facebook) }}">
                            </div>

                            <!-- Link Instagram -->
                            <div class="form-group">
                                <label for="link_instagram">Link Instagram</label>
                                <input type="text" name="link_instagram" class="form-control"
                                    value="{{ old('link_instagram', $konten->link_instagram) }}">
                            </div>

                            <!-- Link WhatsApp -->
                            <div class="form-group">
                                <label for="link_whatsapp">Link WhatsApp</label>
                                <input type="text" name="link_whatsapp" class="form-control"
                                    value="{{ old('link_whatsapp', $konten->link_whatsapp) }}">
                            </div>

                            <!-- Link TikTok -->
                            <div class="form-group">
                                <label for="link_tiktok">Link TikTok</label>
                                <input type="text" name="link_tiktok" class="form-control"
                                    value="{{ old('link_tiktok', $konten->link_tiktok) }}">
                            </div>

                            <!-- Tombol Submit -->
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
