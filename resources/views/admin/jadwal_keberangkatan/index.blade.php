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
                            <li class="breadcrumb-item active">Data Jadwal Keberangkatan</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">

                            <div class="card-body">
                                <h1 class="card-title fw-bold">Kelola Data Jadwal Keberangkatan</h1>

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
                        Data Jadwal Keberangkatan
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">


                                <!-- Tombol Tambah -->
                                <button class="btn btn-custom mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah
                                    Jadwal
                                    Keberangkatan</button>

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

                                <!-- Tabel Jadwal Keberangkatan -->
                                <table id="ruteLokasiTable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tempat</th>
                                            <th>Jam Berangkat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwalKeberangkatan as $index => $jadwal)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $jadwal->ruteLokasi->nama_tempat }}</td>
                                                <td>{{ $jadwal->jam_berangkat }}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editModal" data-id="{{ $jadwal->id }}"
                                                        data-rute="{{ $jadwal->id_rute }}"
                                                        data-jam="{{ $jadwal->jam_berangkat }}">Edit</button>
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal"
                                                        data-id="{{ $jadwal->id }}">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- Modal Tambah -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-custom">
                    <h5 class="modal-title" id="addModalLabel">Tambah Jadwal Keberangkatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addForm" method="POST" action="{{ route('admin.jadwal_keberangkatan.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="idRute" class="form-label">Rute Lokasi</label>
                            <select class="form-select" id="idRute" name="id_rute" required>
                                <option value="">Pilih Rute</option>
                                @foreach ($ruteLokasi as $rute)
                                    <option value="{{ $rute->id }}">{{ $rute->nama_tempat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jamBerangkat" class="form-label">Jam Berangkat</label>
                            <input type="time" class="form-control" id="jamBerangkat" name="jam_berangkat" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-custom">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="addForm" class="btn btn-custom">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-custom">
                    <h5 class="modal-title" id="editModalLabel">Edit Jadwal Keberangkatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="editIdRute" class="form-label">Rute Lokasi</label>
                            <select class="form-select" id="editIdRute" name="id_rute" required>
                                @foreach ($ruteLokasi as $rute)
                                    <option value="{{ $rute->id }}">{{ $rute->nama_tempat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editJamBerangkat" class="form-label">Jam Berangkat</label>
                            <input type="time" class="form-control" id="editJamBerangkat" name="jam_berangkat"
                                required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-custom">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="editForm" class="btn btn-custom">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-custom">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Jadwal Keberangkatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus jadwal keberangkatan ini?</p>
                </div>
                <div class="modal-footer modal-footer-custom">
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
            // Handle edit modal
            $('#editModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var rute = button.data('rute');
                var jam = button.data('jam');

                var modal = $(this);
                modal.find('#editIdRute').val(rute);
                modal.find('#editJamBerangkat').val(jam);
                modal.find('form').attr('action', '/admin/jadwal_keberangkatan/' + id);
            });

            // Handle delete modal
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');

                var modal = $(this);
                modal.find('form').attr('action', '/admin/jadwal_keberangkatan/' + id);
            });
        });
    </script>
@endsection
