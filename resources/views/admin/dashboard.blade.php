@extends('admin.layout.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard Daftar Mobil Elf</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="card text-dark bg-primary mt-3">
                            <div class="card-body">
                                <h1 class="card-title fw-bold">Dashboard - Daftar Mobil Elf</h1>
                                <p class="card-text">Selamat Datang {{ Auth::user()->nama_depan }} di Website
                                    {{ $konten->nama_web }}!</p>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Filter berdasarkan status keberangkatan -->
                <div id="alert-container"></div>
                <div class="row mb-3">
                    <div class="col-12">
                        <form action="{{ route('admin.dashboard') }}" method="GET" class="d-flex justify-content-start">
                            <div class="input-group">
                                <select name="status_keberangkatan" class="form-select">
                                    <option value="">Semua Status</option>
                                    <option value="Berangkat" {{ $status == 'Berangkat' ? 'selected' : '' }}>Jalan
                                    </option>

                                    <option value="Selesai" {{ $status == 'Selesai' ? 'selected' : '' }}>Libur</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Display cards -->
                <div class="row">
                    @foreach ($mobilElfs as $mobilElf)
                        <div class="col-12 col-md-6 col-xl-3 py-3 py-xl-0">
                            <div class="card text-start rounded-4 shadow">
                                @if ($mobilElf->detailElf->gambar->isNotEmpty())
                                    <img src="{{ asset($mobilElf->detailElf->gambar->first()->path) }}"
                                        class="card-img-top rounded-4 rounded-bottom-2" alt="{{ $mobilElf->nama }}"
                                        style="width: 100%; height: 150px; object-fit: cover;">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $mobilElf->nama }}</h5>
                                    <p class="mb-1">Sopir: {{ $mobilElf->nama_sopir }}</p>
                                    <p class="mb-1">No. HP Sopir: {{ $mobilElf->nohp_sopir }}</p>
                                    <div class="container-fluid my-2">
                                        <div class="row">
                                            <div class="col text-start p-0">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt text-primary-color fs-6 me-1"></i>
                                                    <p class="my-auto text-dark">
                                                        {{ $mobilElf->jadwalKeberangkatan->ruteLokasi->nama_tempat ?? 'N/A' }}
                                                    </p>
                                                </div>
                                                <p class="fw-bold my-1 text-dark">
                                                    {{ $mobilElf->jadwalKeberangkatan->jam_berangkat ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col text-center">
                                                <i class="bi bi-arrow-right fw-bold fs-3 text-yellow-color"></i>
                                            </div>
                                            <div class="col text-end p-0">
                                                <p class="my-auto text-dark">
                                                    {{ $mobilElf->jadwalKedatangan->ruteLokasi->nama_tempat ?? 'N/A' }} <i
                                                        class="bi bi-geo-alt text-primary-color me-1"></i></p>
                                                <p class="fw-bold my-1 text-dark">
                                                    {{ $mobilElf->jadwalKedatangan->jam_kedatangan ?? 'N/A' }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="fw-bold text-green-color">Rp
                                        {{ number_format($mobilElf->harga, 0, ',', '.') }}</h5>

                                    <!-- Menampilkan "Katanya Jalan" atau "Katanya Libur" berdasarkan status -->
                                    @if ($mobilElf->status_keberangkatan == 'berangkat')
                                        <p>Status: <span class="badge bg-primary">Jalan</span></p>
                                    @elseif ($mobilElf->status_keberangkatan == 'selesai')
                                        <p>Status: <span class="badge bg-secondary">Libur</span></p>
                                    @endif

                                    <!-- Button untuk mengubah status -->
                                    <p>Ubah Status</p>
                                    <div class="d-flex flex-wrap mb-3">

                                        <button onclick="updateStatus({{ $mobilElf->id }}, 'berangkat')"
                                            class="btn btn-primary mr-2">Jalan</button>
                                        <button onclick="updateStatus({{ $mobilElf->id }}, 'selesai')"
                                            class="btn btn-secondary">Libur</button>
                                    </div>


                                    <div class="mb-2">
                                        <p class="mb-1">Rute:</p>
                                        @foreach ($mobilElf->detailElf->ruteLokasi as $rute)
                                            <span class="badge bg-primary">{{ $rute->nama_tempat }}</span>
                                        @endforeach
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        @foreach ($mobilElf->detailElf->gambar as $gambar)
                                            <img src="{{ asset($gambar->path) }}" width="50" class="mb-2 me-2 rounded">
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $mobilElfs->appends(['status_keberangkatan' => $status])->links() }}
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function updateStatus(mobilElfId, status) {
            $.ajax({
                url: '{{ route('admin.update_status') }}', // Route untuk update status
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: mobilElfId,
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        // Tampilkan alert success
                        $('#alert-container').html(`
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Status berhasil diperbarui!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `);

                        // Tambahkan delay sebelum refresh halaman agar pengguna bisa melihat alert
                        setTimeout(function() {
                            location.reload();
                        }, 1000); // Refresh setelah 2 detik
                    }
                },
                error: function(xhr) {
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                }
            });
        }
    </script>
@endsection
