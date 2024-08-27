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
                            <li class="breadcrumb-item active">Edit Data Detail Mobil Elf</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Edit Data Detail Mobil Elf</h1>

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
                        Edit Data Detail Mobil Elf
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

                        <form method="POST" action="{{ route('admin.detail_elf.update', $detailElf->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                                    value="{{ $detailElf->nama_mobil }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="plat_nomor" class="form-label">Plat Nomor</label>
                                <input type="text" class="form-control" id="plat_nomor" name="plat_nomor"
                                    value="{{ $detailElf->plat_nomor }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="ruteLokasi" class="form-label">Rute Lokasi</label>
                                <div id="ruteContainer">
                                    @foreach ($detailElfRutes as $ruteId)
                                        <div class="rute-item mb-2">
                                            <select class="form-select" name="rute_lokasi[]">
                                                @foreach ($ruteLokasis as $rute)
                                                    <option value="{{ $rute->id }}"
                                                        {{ $rute->id == $ruteId ? 'selected' : '' }}>
                                                        {{ $rute->nama_tempat }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="button"
                                                class="btn btn-danger btn-sm mt-2 removeRuteBtn">Hapus</button>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-secondary mt-2" id="addRuteBtn">Tambah Rute</button>
                            </div>
                            <div class="mb-3">
                                <label for="gambarContainer" class="form-label">Gambar Mobil</label>
                                <div id="gambarContainer">
                                    @foreach ($detailElfGambars as $gambar)
                                        <div class="mb-2">
                                            <img src="{{ asset($gambar->path) }}" width="100" class="mb-2">
                                            <input type="hidden" name="existing_images[]" value="{{ $gambar->path }}">
                                            <input type="checkbox" name="existing_images_to_delete[]"
                                                value="{{ $gambar->path }}">
                                            <label for="existing_images_to_delete[]">Hapus Gambar</label>
                                        </div>
                                    @endforeach
                                    <input type="file" class="form-control mb-2" name="gambar[]" multiple>
                                    <button type="button" class="btn btn-primary mt-2" id="addImageBtn">Tambah
                                        Gambar</button>
                                </div>
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
                input.className = 'form-control mb-2 mt-2';
                input.name = 'gambar[]';
                container.appendChild(input);
            });

            // Handle Add Rute Button
            document.getElementById('addRuteBtn').addEventListener('click', function() {
                const container = document.getElementById('ruteContainer');
                const div = document.createElement('div');
                div.className = 'rute-item mb-2 mt-2';

                const select = document.createElement('select');
                select.className = 'form-select';
                select.name = 'rute_lokasi[]';

                // Create options from existing data
                const ruteOptions = @json(
                    $ruteLokasis->map(function ($rute) {
                        return [
                            'id' => $rute->id,
                            'nama_tempat' => $rute->nama_tempat,
                        ];
                    }));

                ruteOptions.forEach(rute => {
                    const option = document.createElement('option');
                    option.value = rute.id;
                    option.textContent = rute.nama_tempat;
                    select.appendChild(option);
                });

                div.appendChild(select);

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'btn btn-danger btn-sm mt-2 removeRuteBtn';
                removeBtn.textContent = 'Hapus';
                div.appendChild(removeBtn);

                container.appendChild(div);
            });

            // Handle Remove Rute Button
            document.getElementById('ruteContainer').addEventListener('click', function(e) {
                if (e.target.classList.contains('removeRuteBtn')) {
                    e.target.parentElement.remove();
                }
            });

            // Handle Remove Image Button
            document.getElementById('gambarContainer').addEventListener('click', function(e) {
                if (e.target.classList.contains('removeImageBtn')) {
                    e.target.parentElement.remove();
                }
            });
        });
    </script>
@endsection
