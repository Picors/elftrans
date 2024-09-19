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
                            <li class="breadcrumb-item active">Data Mobil Elf</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Kelola Data Mobil Elf</h1>

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
                        Data Mobil Elf
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

                        <!-- Tombol Tambah Data -->
                        <a href="{{ route('admin.mobil_elf.create') }}" class="btn btn-primary mb-3">Tambah Mobil Elf</a>

                        <!-- Tabel Data -->
                        <table id="ruteLokasiTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mobil</th>
                                    <th>Sopir</th>
                                    <th>No HP Sopir</th>
                                    <th>Jadwal Keberangkatan</th>
                                    <th>Jadwal Kedatangan</th>
                                    <th>Harga</th>
                                    <th>Status Keberangkatan</th>
                                    <th>Rute Lokasi</th>
                                    <th>Gambar Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mobilElfs as $key => $mobilElf)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $mobilElf->nama }}</td>
                                        <td>{{ $mobilElf->nama_sopir }}</td>
                                        <td>{{ $mobilElf->nohp_sopir }}</td>
                                        <td>{{ $mobilElf->jadwalKeberangkatan->ruteLokasi->nama_tempat ?? 'N/A' }} -
                                            {{ $mobilElf->jadwalKeberangkatan->jam_berangkat ?? 'N/A' }} <br>
                                            {{-- Tanggal: <p class="badge bg-primary">
                                                {{ $mobilElf->created_at->format('d F Y') }}</p> --}}

                                        </td>
                                        <td>{{ $mobilElf->jadwalKedatangan->ruteLokasi->nama_tempat ?? 'N/A' }} -
                                            {{ $mobilElf->jadwalKedatangan->jam_kedatangan ?? 'N/A' }}</td>
                                        <td>{{ $mobilElf->harga }}</td>
                                         @if ($mobilElf->status_keberangkatan == 'berangkat')
                                            <td> <button class="btn btn-primary" disabled>Jalan</button></td>
                                        @elseif ($mobilElf->status_keberangkatan == 'selesai')
                                            <td> <button class="btn btn-secondary" disabled>Libur</button></td>
                                        @endif
                                        <td>
                                            @foreach ($mobilElf->detailElf->ruteLokasi as $rute)
                                                <span class="badge bg-primary">{{ $rute->nama_tempat }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($mobilElf->detailElf->gambar as $gambar)
                                                <img src="{{ asset($gambar->path) }}" width="100" class="mb-2">
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.mobil_elf.edit', $mobilElf->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <p></p>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal" data-id="{{ $mobilElf->id }}"
                                                data-name="{{ $mobilElf->nama }}">Hapus</button>
                                        </td>
                                    </tr>
                                @empty

                                    <p class="text-center">Tidak ada data</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus mobil elf "<span id="detailElfName"></span>"?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ketika tombol hapus diklik, isi modal dengan data yang sesuai
            var deleteModal = document.getElementById('deleteModal');
            deleteModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                var name = button.getAttribute('data-name');

                var modalTitle = deleteModal.querySelector('.modal-title');
                var modalBodyInput = deleteModal.querySelector('.modal-body #detailElfName');
                var form = deleteModal.querySelector('#deleteForm');

                modalTitle.textContent = 'Konfirmasi Hapus ' + name;
                modalBodyInput.textContent = name;
                form.action = '{{ route('admin.mobil_elf.destroy', ':id') }}'.replace(':id', id);
            });
        });
    </script>
@endsection
