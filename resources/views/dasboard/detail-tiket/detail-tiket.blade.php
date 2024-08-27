@extends('layout.main')
@section('container')
<!-- Begin Page Content -->

    <!-- start content -->
    <div class="width-90 mt-5">
        <!-- detail-tike -->
        <!-- list tiket -->
        <h3 class="text-primary-color fw-bold text-center mt-5">Tiket Kamu</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mt-3 mb-5">
                    <div class="card rounded-4 shadow">
                        <div class="card-body">
                            <!--status  -->
                            <div class="row">
                                <div class="col-5 d-flex align-items-center">
                                    <p class="text-second-color  my-auto">Status Elf</p>
                                </div>
                                <div class="col-7 text-end my-2">
                                    <button type="button"
                                        class="bg-red-color-opacity text-red-color border-0 rounded-3 px-2 py-1 "
                                        disabled>belum Berangkat</button>
                                </div>
                            </div>

                            <!-- no tiket -->
                            <p class="mt-2 mt-md-0 card-title text-start fw-bold">Elf Garut Bandung 001</p>
                            <div class="row">
                                <div class="col ">
                                    <p class="my-auto">Order ID</p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-primary-color fw-bold my-auto">1234567890</p>
                                </div>
                            </div>
                            {{-- line --}}
                            <hr class="striped-line">
                            
                            <div class="row">
                                <div class="col ">
                                    <div class="d-flex align-items-center ">
                                        <i class="bi bi-person-fill text-second-color"></i>
                                        <p class="text-dark ms-2 my-auto">Sopir Elf</p>
                                    </div>
                                    <div class="d-flex align-center mt-3">
                                        <i class="bi bi-person-fill text-second-color"></i>
                                        <p class="text-dark ms-2 my-auto">No HP Sopir</p>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <p class="text-primary-color fw-bold my-auto">Endang</p>
                                    <p class="text-primary-color fw-bold my-auto mt-3">08123456789</p>
                                </div>
                            </div>

                            {{-- tiket --}}
                            <div class="row justify-content-between align-items-center my-3">
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                                        <p class="my-auto">Kursi Terpilih</p>
                                    </div>
                                </div>

                                <div class="col text-end">
                                    <p class=" fw-bold text-primary-color my-auto">A-1</p>
                                </div>
                            </div>

                            {{-- schedule --}}
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col-7 text-start">
                                    <p class="my-auto">Jadwal Keberangkatan</p>
                                </div>
                                <div class="col-5 text-end">
                                    <p class=" fw-bold text-primary-color my-auto">15-11-2023</p>
                                </div>
                            </div>
                            
                            {{-- Destination --}}
                            <div class="border-blue-dark-color rounded-4 px-3 py-1">
                                <div class="container-fluid my-2">
                                    <div class="row align-items-center">
                                        <div class="col text-start p-0 ">
                                            <p class=" my-auto mb-2">Garut</p>
                                            <div class="d-flex mb-2">
                                                <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                <p class="small text-primary-color my-auto">Keberangkatan</p>
                                            </div>
                                            <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                                        </div>

                                        <div class="col text-end p-0">
                                            <p class=" my-auto mb-2">Bandung</p>
                                            <div class="d-flex mb-2 justify-content-end">
                                                <i class="bi bi-geo-alt-fill text-primary-color me-1"></i>
                                                <p class="small text-primary-color my-auto mb-2">Kedatangan</p>
                                            </div>
                                            <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Status --}}
                            <div class="container-fluid my-2">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center p-0">
                                        <p class="text-second-color fw-bold my-auto">Status</p>
                                    </div>

                                    <div class="col text-end  p-0 my-2">
                                        <button type="button"
                                            class="bg-green-color text-light border-0 rounded-3 px-3 py-2"
                                            disabled>Lunas</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-7">
                                    <p class="text-dark ms-2 my-auto">Metode Pembayaran</p>
                                    <p class="text-dark ms-2 my-auto  mt-3">Tanggal Pemesanan</p>
                                </div>
                                <div class="col-5 text-end">
                                    <p class="text-primary-color fw-bold my-auto">Transfer Bank</p>
                                    <p class="text-primary-color fw-bold my-auto mt-3">14-11-2023</p>
                                </div>
                            </div>

                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="fw-bold text-dark my-auto">Total Pembayaran</h5>
                                </div>
                                <div class="col">
                                    <h5 class="fw-bold text-green-color text-end my-auto">Rp 50.000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- end content -->
@endsection