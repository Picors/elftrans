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
                            <li class="breadcrumb-item active">Tambah Data Detail Mobil Elf</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Tambah Data Detail Mobil Elf</h1>

                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Detail Mobil Elf
                    </div>
                    <div class="card-body">
                        <!-- Alert Sukses -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Alert Error -->
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.detail_elf.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required>
                            </div>
                            <div class="mb-3">
                                <label for="plat_nomor" class="form-label">Plat Nomor</label>
                                <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" required>
                            </div>
                            <div class="mb-3" id="gambarContainer">
                                <label class="form-label">Gambar Mobil</label>
                                <input type="file" class="form-control mb-2" name="gambar[]" required>
                                <!-- Tambah input gambar tambahan -->
                                <button type="button" class="btn btn-secondary mt-2" id="addImageBtn">Tambah Gambar
                                    Lain</button>
                                <p></p>
                            </div>
                            <div class="mb-3">
                                <label for="ruteLokasi" class="form-label">Rute Lokasi</label>
                                <div id="ruteContainer">
                                    <select class="form-select" name="rute_lokasi[]" required>
                                        @foreach ($ruteLokasis as $rute)
                                            <option value="{{ $rute->id }}">{{ $rute->nama_tempat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" class="btn btn-secondary mt-2" id="addRuteBtn">Tambah
                                    Rute</button>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle Add Image Button
            document.getElementById('addImageBtn').addEventListener('click', function() {
                const container = document.getElementById('gambarContainer');
                const input = document.createElement('input');
                input.type = 'file';
                input.className = 'form-control mb-2';
                input.name = 'gambar[]';
                container.appendChild(input);
            });

            // Handle Add Rute Button
            document.getElementById('addRuteBtn').addEventListener('click', function() {
                const container = document.getElementById('ruteContainer');
                const select = document.createElement('select');
                select.className = 'form-select mb-2 mt-2';
                select.name = 'rute_lokasi[]';

                // Create options from existing data
                @php
                    $ruteOptions = '';
                    foreach ($ruteLokasis as $rute) {
                        $ruteOptions .= "<option value='{$rute->id}'>{$rute->nama_tempat}</option>";
                    }
                @endphp

                select.innerHTML = `{!! $ruteOptions !!}`;
                container.appendChild(select);
            });
        });
    </script>
@endsection
