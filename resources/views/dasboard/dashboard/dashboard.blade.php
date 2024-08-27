@extends('layout.main')
@section('container')
<!-- Begin Page Content -->

    <!-- start hero -->
        <div class="d-flex flex-column col-md-12">
            <img src="image/Hero_Banner_7.png" class="img-fluid" alt="">
        </div>
    <!-- end hero -->

    <!-- start content -->
    <div class="width-90 mt-5">
        <!-- profil -->
        <h3 class="text-primary-color fw-bold text-center">Dashboard</h3>
            <div class="d-flex mt-3 mt-md-5 flex-wrap">
                <div class="d-flex flex-column col-md-6 col-12 pe-0 ps-md-3 mt-3 mt-md-0">
                    <div class="card shadow rounded-4 py-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <i class="bi  bi-person-fill text-grey-color fs-4"></i>
                                <div class="mx-2">
                                    <p class="p-0 my-auto text-dark fs-6">Darlene Robertson</p>
                                    <p class="p-0 my-auto xtra-small-font">default123</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-2">
                                <i class="bi bi-telephone-fill text-grey-color fs-4"></i>
                                <p class="mx-2 text-dark fs-6 my-auto">+62 812 3456 7890</p>
                            </div>
                            <div class="d-flex align-items-center my-2">
                                <i class="bi bi-envelope-fill text-grey-color fs-4 "></i>
                                <p class="mx-2 text-dark fs-6 my-auto">example@gmail.com</p>
                            </div>
                            <div class="d-flex align-items-center my-2 justify-content-between">
                                <div class="d-flex">
                                    <i class="bi bi-lock-fill text-grey-color fs-4"></i>
                                    <p class="mx-2 text-dark fs-6 my-auto">Ubah Password</p>
                                </div>
                                <div>
                                    <a href="ubah-password"><i class="bi bi-chevron-right text-dark"></i></a>
                                </div>
                            </div>
                            <div class="">
                                <a href="profil" class="btn bg-primary-color text-light col-12 fw-bold">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column col-md-6 col-12 ps-0 ps-md-3 mt-3 mt-md-0">
                    <div>
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <i class="bi bi-ticket-fill fs-2 text-green-color"></i>
                                    </div>
                                    <div class="mx-3">
                                        <p class="my-auto">Total Tiket Berhasil</p>
                                        <p class="my-auto fs-5 fw-bold text-dark">113</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow rounded-4 my-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <i class="bi bi-ticket-fill fs-2 text-red-color"></i>
                                    </div>
                                    <div class="mx-3">
                                        <p class="my-auto">Total Tiket Berhasil</p>
                                        <p class="my-auto fs-5 fw-bold text-dark">113</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <i class="bi bi-ticket-fill fs-2 text-yellow-color"></i>
                                    </div>
                                    <div class="mx-3">
                                        <p class="my-auto">Total Tiket Berhasil</p>
                                        <p class="my-auto fs-5 fw-bold text-dark">113</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
        <!-- list tiket -->
        <h3 class="text-primary-color fw-bold text-center mt-5">Tiket Kamu</h3>
            <div class="row">
                <div class="col-12 col-md-6 col-xxl-3 col-xl-4 mt-3">
                    <div class="card rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-start fw-bold">Elf Garut Bandung 001</h5>
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- tiket --}}
                            <div class="row justify-content-between align-items-center my-3">

                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <iconify-icon icon="zmdi:seat" class="text-yellow-color fs-6 me-2"></iconify-icon>
                                        <p class="my-auto">Kursi Terpilih</p>
                                    </div>
                                </div>

                                <div class="col text-end">
                                    <p class=" fw-bold text-primary-color my-auto">A-1</p>
                                </div>
                            </div>

                            {{-- schedule --}}
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col text-start">
                                    <p class="my-auto">Jadwal Keberangkatan</p>
                                </div>
                                <div class="col text-end">
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
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="fw-bold text-dark my-auto">Rp 50.000</h5>
                                </div>
                            </div>
                            <a href="detail-tiket" class="btn col-12 bg-primary-color fw-bold text-light mt-3 ">Cek Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xxl-3 col-xl-4 mt-3">
                    <div class="card rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-start fw-bold">Elf Garut Bandung 001</h5>
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- chair --}}
                            <div class="row justify-content-between align-items-center my-3">

                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <iconify-icon icon="zmdi:seat" class="text-yellow-color fs-6 me-2"></iconify-icon>
                                        <p class="my-auto">Kursi Terpilih</p>
                                    </div>
                                </div>

                                <div class="col text-end">
                                    <p class=" fw-bold text-primary-color my-auto">A-1</p>
                                </div>
                            </div>

                            {{-- schedule --}}
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col text-start">
                                    <p class="my-auto">Jadwal Keberangkatan</p>
                                </div>
                                <div class="col text-end">
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
                                                <p class="xtra-small text-primary-color my-auto">Keberangkatan</p>
                                            </div>
                                            <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                                        </div>

                                        <div class="col text-end p-0">
                                            <p class=" my-auto mb-2">Bandung</p>
                                            <div class="d-flex mb-2 justify-content-end">
                                                <i class="bi bi-geo-alt-fill text-primary-color me-1"></i>
                                                <p class="xtra-small text-primary-color my-auto mb-2">Kedatangan</p>
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
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="fw-bold text-dark my-auto">Rp 50.000</h5>
                                </div>
                            </div>
                            <a href="detail-tiket" class="btn col-12 bg-primary-color fw-bold text-light mt-3 ">Cek Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xxl-3 col-xl-4 mt-3">
                    <div class="card rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-start fw-bold">Elf Garut Bandung 001</h5>
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- chair --}}
                            <div class="row justify-content-between align-items-center my-3">

                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <iconify-icon icon="zmdi:seat" class="text-yellow-color fs-6 me-2"></iconify-icon>
                                        <p class="my-auto">Kursi Terpilih</p>
                                    </div>
                                </div>

                                <div class="col text-end">
                                    <p class=" fw-bold text-primary-color my-auto">A-1</p>
                                </div>
                            </div>

                            {{-- schedule --}}
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col text-start">
                                    <p class="my-auto">Jadwal Keberangkatan</p>
                                </div>
                                <div class="col text-end">
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
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="fw-bold text-dark my-auto">Rp 50.000</h5>
                                </div>
                            </div>
                            <a href="detail-tiket" class="btn col-12 bg-primary-color fw-bold text-light mt-3 ">Cek Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xxl-3 col-xl-4 mt-3">
                    <div class="card rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-start fw-bold">Elf Garut Bandung 001</h5>
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- chair --}}
                            <div class="row justify-content-between align-items-center my-3">

                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <iconify-icon icon="zmdi:seat" class="text-yellow-color fs-6 me-2"></iconify-icon>
                                        <p class="my-auto">Kursi Terpilih</p>
                                    </div>
                                </div>

                                <div class="col text-end">
                                    <p class=" fw-bold text-primary-color my-auto">A-1</p>
                                </div>
                            </div>

                            {{-- schedule --}}
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col text-start">
                                    <p class="my-auto">Jadwal Keberangkatan</p>
                                </div>
                                <div class="col text-end">
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
                            {{-- line --}}
                            <hr class="striped-line">

                            {{-- price --}}
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="fw-bold text-dark my-auto">Rp 50.000</h5>
                                </div>
                            </div>
                            <a href="detail-tiket" class="btn col-12 bg-primary-color fw-bold text-light mt-3 ">Cek Tiket</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- pagination -->
        <div class="d-flex justify-content-between my-5">
            <a href=""><i class="bi bi-chevron-left text-primary-color"></i></a>
            <div>
                <a href="" class="link-opacity-100 ">1</a>
                <a href="" class="text-decoration-none text-secondary ">2</a>
                <a href="" class="text-decoration-none text-secondary ">3</a>
            </div>
            <a href=""><i class="bi bi-chevron-right text-primary-color"></i></a>
        </div>
    </div>
    <!-- end content -->
@endsection