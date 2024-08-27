@extends('layout.main')

@section('container')

    <div class="containter text-center bg-second-color py-2 py-md-5 p-md-5">
        <div class="container-fluid width-90">
            <div class="card rounded-4">
                <div class="card-body p-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col p-auto ps-md-0 ">

                                {{-- Dropdown --}}

                                {{-- Start Location --}}
                                <div class="form-group me-auto me-md-3 text-start">
                                    <label for="lokasi-awal" class="fw-bold mb-1">Lokasi Awal</label>
                                    <div class="dropdown d-grid gap-2 mt-1 mt-md-0">
                                        <button
                                            class="d-flex btn  dropdown-toggle border bg-body-tertiary text-secondary justify-content-between align-items-center rounded-4 text-start"
                                            type="button" id="dropdownStartLoc" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            Pilih Lokasi Awal
                                        </button>
                                        <div class="dropdown-menu px-2" aria-labelledby="dropdownStartItems">
                                            <input class="form-control py-2 px-3" type="text"
                                                placeholder="Pilih Lokasi Awal" id="dropdownSearch"
                                                oninput="filterDropdown('dropdownSearch', '.dropdownStart');">
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdownStart dropdown-item" href="#"
                                                onclick="selectOption('Garut', 'dropdownStartItems', 'dropdownStartLoc')">Garut</a>
                                            <a class="dropdownStart dropdown-item" href="#"
                                                onclick="selectOption('Tasikmalaya', 'dropdownStartItems', 'dropdownStartLoc')">Tasikmalaya</a>
                                            <a class="dropdownStart dropdown-item" href="#"
                                                onclick="selectOption('Bandung', 'dropdownStartItems', 'dropdownStartLoc')">Bandung</a>
                                            <!-- Tambahkan opsi dropdown sesuai kebutuhan -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                {{-- Destination --}}
                                <div class="form-group my-2 my-md-0 mx-0 mx-md-3 text-start">
                                    <label for="lokasi-tujuan" class="fw-bold mb-1 ">Lokasi Tujuan</label>
                                    <div class="dropdown d-grid gap-2 mt-1 mt-md-0">
                                        <button
                                            class="d-flex btn dropdown-toggle border bg-body-tertiary text-secondary justify-content-between align-items-center rounded-4 text-start"
                                            type="button" id="dropdownDesItems" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            Pilih Lokasi Tujuan
                                        </button>
                                        <div class="dropdown-menu px-2" aria-labelledby="dropdownDes">
                                            <input class="form-control py-2 px-3" type="text"
                                                placeholder="Pilih Lokasi Tujuan" id="dropDownDes"
                                                oninput="filterDropdown('dropDownDes', '.dropdownDesItem');">
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdownDesItem dropdown-item" href="#"
                                                onclick="selectOption('Garut', 'dropdownDes', 'dropdownDesItems')">Garut</a>
                                            <a class="dropdownDesItem dropdown-item" href="#"
                                                onclick="selectOption('Tasikmalaya', 'dropdownDes', 'dropdownDesItems')">Tasikmalaya</a>
                                            <a class="dropdownDesItem dropdown-item" href="#"
                                                onclick="selectOption('Bandung', 'dropdownDes', 'dropdownDesItems')">Bandung</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-auto pe-md-0">
                                {{-- DatePicker --}}
                                <div class="form-group mx-0 ms-md-3 text-start">
                                    <label for="jadwal" class="fw-bold mb-1">Jadwal Keberangkatan</label>
                                    <div class="input-group ">
                                        <input type="text"
                                            class="form-control border bg-body-tertiary text-secondary text-start rounded-4 px-3"
                                            id="datepicker" placeholder="Pilih Tanggal" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- button --}}
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn bg-primary-color text-light fw-bold" role="button">Cari Elf</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="containter text-center p-2 p-md-5">
        <div class="container-fluid width-90">
            <h3 class="text-primary-color text-center mt-3 mt-md-0 mb-0 mb-md-3 ">Pilih Elf Kamu</h3>

            {{-- Card Content --}}
            <div class="row">

                {{-- Card 1 --}}
                <div class="col-12 col-md-6 col-xl-3 py-3 py-xl-0">
                    <div class="card text-start rounded-4 shadow ">
                        <img src="image/Thumbnail.png" class="card-img-top rounded-4 rounded-bottom-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Elf Garut Bandung 001</h5>
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                                <p class="my-auto">1 x 3</p>
                            </div>

                            {{-- Destination --}}
                            <div class="container-fluid my-2">
                                <div class="row">
                                    <div class="col text-start p-0 ">
                                        <div class="d-flex">
                                            <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                            <p class="my-auto text-dark">Garut</p>
                                        </div>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                    <div class="col text-center">
                                        <i class="bi bi-arrow-right fw-bold fs-3 text-yellow-color"></i>
                                    </div>
                                    <div class="col text-end p-0">
                                        <p class="my-auto text-dark">Bandung <i
                                                class="bi bi-geo-alt-fill text-primary-color me-1"></i></p>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                </div>
                            </div>

                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <h5 class="fw-bold text-green-color">Rp 50.000</h5>
                            <div class="d-grid gap-2 mt-3">
                                <a href="chair" class="btn bg-primary-color text-light fw-bold rounded-3 py-2">Pilih Elf</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col-12 col-md-6 col-xl-3 py-3 py-xl-0">
                    <div class="card text-start rounded-4 shadow ">
                        <img src="image/Thumbnail.png" class="card-img-top rounded-4 rounded-bottom-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Elf Garut Bandung 001</h5>
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                                <p class="my-auto">1 x 3</p>
                            </div>

                            {{-- Destination --}}
                            <div class="container-fluid my-2">
                                <div class="row">
                                    <div class="col text-start p-0 ">
                                        <div class="d-flex">
                                            <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                            <p class="my-auto text-dark">Garut</p>
                                        </div>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                    <div class="col text-center">
                                        <i class="bi bi-arrow-right fw-bold fs-3 text-yellow-color"></i>
                                    </div>
                                    <div class="col text-end p-0">
                                        <p class="my-auto text-dark">Bandung <i
                                                class="bi bi-geo-alt-fill text-primary-color me-1"></i></p>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                </div>
                            </div>

                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <h5 class="fw-bold text-green-color">Rp 50.000</h5>
                            <div class="d-grid gap-2 mt-3">
                                <a href="chair" class="btn bg-primary-color text-light fw-bold rounded-3 py-2">Pilih Elf</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col-12 col-md-6 col-xl-3 py-3 py-xl-0">
                    <div class="card text-start rounded-4 shadow ">
                        <img src="image/Thumbnail.png" class="card-img-top rounded-4 rounded-bottom-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Elf Garut Bandung 001</h5>
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                                <p class="my-auto">1 x 3</p>
                            </div>

                            {{-- Destination --}}
                            <div class="container-fluid my-2">
                                <div class="row">
                                    <div class="col text-start p-0 ">
                                        <div class="d-flex">
                                            <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                            <p class="my-auto text-dark">Garut</p>
                                        </div>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                    <div class="col text-center">
                                        <i class="bi bi-arrow-right fw-bold fs-3 text-yellow-color"></i>
                                    </div>
                                    <div class="col text-end p-0">
                                        <p class="my-auto text-dark">Bandung <i
                                                class="bi bi-geo-alt-fill text-primary-color me-1"></i></p>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                </div>
                            </div>

                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <h5 class="fw-bold text-green-color">Rp 50.000</h5>
                            <div class="d-grid gap-2 mt-3">
                                <a href="chair" class="btn bg-primary-color text-light fw-bold rounded-3 py-2">Pilih Elf</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="col-12 col-md-6 col-xl-3 py-3 py-xl-0">
                    <div class="card text-start rounded-4 shadow ">
                        <img src="image/Thumbnail.png" class="card-img-top rounded-4 rounded-bottom-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Elf Garut Bandung 001</h5>
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                                <p class="my-auto">1 x 3</p>
                            </div>

                            {{-- Destination --}}
                            <div class="container-fluid my-2">
                                <div class="row">
                                    <div class="col text-start p-0 ">
                                        <div class="d-flex">
                                            <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                            <p class="my-auto text-dark">Garut</p>
                                        </div>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                    <div class="col text-center">
                                        <i class="bi bi-arrow-right fw-bold fs-3 text-yellow-color"></i>
                                    </div>
                                    <div class="col text-end p-0">
                                        <p class="my-auto text-dark">Bandung <i
                                                class="bi bi-geo-alt-fill text-primary-color me-1"></i></p>
                                        <p class="fw-bold my-1 text-dark">09:00 WIB</p>
                                    </div>
                                </div>
                            </div>

                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <h5 class="fw-bold text-green-color">Rp 50.000</h5>
                            <div class="d-grid gap-2 mt-3">
                                <a href="chair" class="btn bg-primary-color text-light fw-bold rounded-3 py-2">Pilih Elf</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection
