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
                            <li class="breadcrumb-item active">Tambah Data Mobil Elf</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Tambah Data Mobil Elf</h1>

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
                        Tambah Data Mobil Elf
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

                        <!-- Form Tambah Mobil Elf -->
                        <form action="{{ route('admin.mobil_elf.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="id_detailelf" class="form-label">Detail Mobil Elf</label>
                                <select class="form-select @error('id_detailelf') is-invalid @enderror" id="id_detailelf"
                                    name="id_detailelf" required>
                                    <option value="">Pilih Detail Mobil Elf</option>
                                    @foreach ($detailElfs as $detailElf)
                                        <option value="{{ $detailElf->id }}"
                                            {{ old('id_detailelf') == $detailElf->id ? 'selected' : '' }}>
                                            {{ $detailElf->nama_mobil }} - Plat Nomor: {{ $detailElf->plat_nomor }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_detailelf')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_sopir" class="form-label">Nama Sopir</label>
                                <input type="text" class="form-control @error('nama_sopir') is-invalid @enderror"
                                    id="nama_sopir" name="nama_sopir" value="{{ old('nama_sopir') }}" required>
                                @error('nama_sopir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nohp_sopir" class="form-label">No HP Sopir</label>
                                <input type="text" class="form-control @error('nohp_sopir') is-invalid @enderror"
                                    id="nohp_sopir" name="nohp_sopir" value="{{ old('nohp_sopir') }}" required>
                                @error('nohp_sopir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="id_jadwal_keberangkatan" class="form-label">Jadwal Keberangkatan</label>
                                <select class="form-select @error('id_jadwal_keberangkatan') is-invalid @enderror"
                                    id="id_jadwal_keberangkatan" name="id_jadwal_keberangkatan" required>
                                    <option value="">Pilih Jadwal Keberangkatan</option>
                                    @foreach ($jadwalKeberangkatan as $jadwal)
                                        <option value="{{ $jadwal->id }}"
                                            {{ old('id_jadwal_keberangkatan') == $jadwal->id ? 'selected' : '' }}>
                                            {{ $jadwal->ruteLokasi->nama_tempat }} - Jam: {{ $jadwal->jam_berangkat }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_jadwal_keberangkatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="id_jadwal_kedatangan" class="form-label">Jadwal Kedatangan</label>
                                <select class="form-select @error('id_jadwal_kedatangan') is-invalid @enderror"
                                    id="id_jadwal_kedatangan" name="id_jadwal_kedatangan" required>
                                    <option value="">Pilih Jadwal Kedatangan</option>
                                    @foreach ($jadwalKedatangan as $jadwal)
                                        <option value="{{ $jadwal->id }}"
                                            {{ old('id_jadwal_kedatangan') == $jadwal->id ? 'selected' : '' }}>
                                            {{ $jadwal->ruteLokasi->nama_tempat }} - Jam: {{ $jadwal->jam_kedatangan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_jadwal_kedatangan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    id="harga" name="harga" value="{{ old('harga') }}" step="0.01" required>
                                @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status_keberangkatan" class="form-label">Status Keberangkatan</label>
                                <select class="form-select @error('status_keberangkatan') is-invalid @enderror"
                                    id="status_keberangkatan" name="status_keberangkatan" required>
                                    <option value="">Pilih Status Keberangkatan</option>
                                    <option value="berangkat"
                                        {{ old('status_keberangkatan') == 'berangkat' ? 'selected' : '' }}>Berangkat
                                    </option>
                                    <option value="belum berangkat"
                                        {{ old('status_keberangkatan') == 'belum berangkat' ? 'selected' : '' }}>Belum
                                        Berangkat</option>
                                    <option value="selesai"
                                        {{ old('status_keberangkatan') == 'selesai' ? 'selected' : '' }}>Selesai
                                    </option>
                                </select>
                                @error('status_keberangkatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
