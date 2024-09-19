@extends('layout.main')

@section('container')

    <div class="containter text-center bg-second-color py-2 py-md-5 p-md-5">
        <div class="container-fluid width-90">
            <div class="card rounded-4">
                <div class="card-body p-4">
                    <div class="container-fluid">
                        <form action="{{ route('cari_mobil_elf') }}" method="GET">
                            <div class="row">
                                <div class="col-12 col-lg-4 p-0 ps-md-0">
                                    {{-- Lokasi Awal --}}
                                    <div class="form-group me-auto me-lg-3 text-start">
                                        <label for="lokasi_awal" class="fw-bold mb-1">Lokasi Awal</label>
                                        <select name="lokasi_awal" id="lokasi_awal"
                                            class="form-control border bg-body-tertiary text-secondary rounded-4">
                                            <option value="">Pilih Lokasi Awal</option>
                                            @foreach ($rute as $lokasi)
                                                <option value="{{ $lokasi->id }}">{{ $lokasi->nama_tempat }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 p-0 mt-3 mt-lg-0">
                                    {{-- Lokasi Tujuan --}}
                                    <div class="form-group text-start my-2 my-md-0 mx-0 mx-lg-3">
                                        <label for="lokasi_tujuan" class="fw-bold mb-1">Lokasi Tujuan</label>
                                        <select name="lokasi_tujuan" id="lokasi_tujuan"
                                            class="form-control border bg-body-tertiary text-secondary rounded-4">
                                            <option value="">Pilih Lokasi Tujuan</option>
                                            @foreach ($rute as $lokasi)
                                                <option value="{{ $lokasi->id }}">{{ $lokasi->nama_tempat }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 p-0 mt-3 mt-lg-0">
                                    {{-- Jadwal Keberangkatan --}}
                                    <div class="form-group mx-0 ms-lg-3 text-start">
                                        <label for="tanggal_keberangkatan" class="fw-bold mb-1">Jadwal
                                            Keberangkatan</label>
                                        <input type="date" name="tanggal_keberangkatan" id="tanggal_keberangkatan"
                                            class="form-control border bg-body-tertiary text-secondary rounded-4">
                                    </div>
                                </div>
                            </div>
                            {{-- Button Cari Elf --}}
                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" class="btn bg-primary-color text-light fw-bold">Cari
                                    Elf</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="container text-center p-2 p-md-5">
        <div class="container-fluid width-90">
            <h3 class="text-primary-color text-center mt-3 mt-md-0 mb-0 mb-md-3">Pilih Elf Kamu</h3>

            {{-- Jika tidak ada hasil pencarian --}}
            @if ($hasilPencarian->isEmpty())
                <div class="alert alert-warning">
                    Tidak ada mobil elf yang ditemukan sesuai kriteria pencarian.
                </div>
            @else
                {{-- Card Content --}}
                <div class="row">
                    @foreach ($hasilPencarian as $mobilElf)
                        <div class="col-12 col-md-6 col-xl-3 py-3 py-xl-0">
                            <div class="card text-start rounded-4 shadow">
                                {{-- Gambar Mobil --}}
                                @if ($mobilElf->detailElf->gambar->isNotEmpty())
                                    <img src="{{ asset($mobilElf->detailElf->gambar->first()->path) }}"
                                        class="card-img-top rounded-4 rounded-bottom-2" alt="{{ $mobilElf->nama }}">
                                @endif

                                <div class="card-body">
                                    {{-- Nama Mobil --}}
                                    <h5 class="card-title fw-bold">{{ $mobilElf->nama }}</h5>

                                    {{-- Informasi Sopir --}}
                                    <p class="mb-1">Sopir: {{ $mobilElf->nama_sopir }}</p>
                                    <p class="mb-1">No. HP Sopir: {{ $mobilElf->nohp_sopir }}</p>

                                    {{-- Destination --}}
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
                                                    {{ $mobilElf->jadwalKeberangkatan->jam_berangkat ?? 'N/A' }}
                                                </p>
                                            </div>
                                            <div class="col text-center">
                                                <i class="bi bi-arrow-right fw-bold fs-3 text-yellow-color"></i>
                                            </div>
                                            <div class="col text-end p-0">
                                                <p class="my-auto text-dark">
                                                    {{ $mobilElf->jadwalKedatangan->ruteLokasi->nama_tempat ?? 'N/A' }}
                                                    <i class="bi bi-geo-alt text-primary-color me-1"></i>
                                                </p>
                                                <p class="fw-bold my-1 text-dark">
                                                    {{ $mobilElf->jadwalKedatangan->jam_kedatangan ?? 'N/A' }}
                                                </p>
                                            </div>
                                             @if ($mobilElf->status_keberangkatan == 'berangkat')
                                                <h5 class="fw-bold text-green-color">Status: <span
                                                        class="badge bg-primary">Jalan</span></p>
                                                @elseif ($mobilElf->status_keberangkatan == 'selesai')
                                                    <h5 class="fw-bold text-green-color">Status: <span
                                                            class="badge bg-secondary">Libur</span></p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Garis Pembatas --}}
                                    <hr class="striped-line">

                                    {{-- Status dan Tombol --}}
                                    <div class="d-flex justify-content-between align-items-center">

                                        <a href="{{ route('mobilElf.detail', $mobilElf->id) }}"
                                            class="btn bg-primary-color text-light fw-bold rounded-3 py-2">
                                            Lihat Detail Elf
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>


    <script>
        function filterDropdown(inputId, dropdownId) {
            var input, filter, items, i;
            input = document.getElementById(inputId);
            filter = input.value.toUpperCase();
            items = document.querySelectorAll(dropdownId);
            for (i = 0; i < items.length; i++) {
                txtValue = items[i].textContent || items[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    items[i].style.display = '';
                } else {
                    items[i].style.display = 'none';
                }
            }
        }

        function selectOption(option, dropdownId, buttonId) {
            document.getElementById(buttonId).textContent = option;
            // Tambahan logika atau tindakan lainnya setelah opsi dipilih
        }

        // DatePicker
        $(document).ready(function() {
            $('#datepicker').datepicker({
                format: 'dd MM yyyy', // Format tanggal
                autoclose: true,
                todayHighlight: true
            });

            // Munculkan datepicker saat tombol trigger diklik
            $('#datepicker-trigger').on('click', function() {
                $('#datepicker').datepicker('show');
            });
        });
        // End
    </script>
    <script>
        $(document).ready(function() {
            $('#lokasi_awal, #lokasi_tujuan').select2({
                placeholder: "Pilih Lokasi",
                allowClear: true
            });
        });
    </script>
@endsection
