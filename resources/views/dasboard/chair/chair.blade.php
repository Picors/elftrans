@extends('layout.main')

@section('container')
    {{-- hero --}}
    <div class="container-fluid text-center width-90 d-md-block d-none">
        <h5 class="text-start text-primary-color mt-4 mb-3">Interior & Exterior</h5>
        <div class="row align-items-start">
            <div class="col">
                <img src="image/car_ticket.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="col">
                <img src="image/car_ticket2.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="col">
                <img src="image/car_ticket3.png" class="img-fluid rounded-3" alt="">
            </div>
        </div>
    </div>

    {{-- Corousel for Hero Mobile --}}
    <div id="carouselForAds" class="carousel slide d-sm-block d-md-none ">
        <div class="carousel-indicators mt-5 rounded-5">
            <button type="button" data-bs-target="#carouselForAds" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselForAds" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselForAds" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner px-3 py-3">
            {{-- Corousel Items --}}
            <div class="carousel-item active">
                <img src="image/car_ticket.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="carousel-item">
                <img src="image/car_ticket2.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="carousel-item">
                <img src="image/car_ticket3.png" class="img-fluid rounded-3" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselForAds" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselForAds" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- Content --}}
    <div class="container-fluid text-center width-90 my-2 my-md-5">
        <div class="row justify-content-center align-items-start">

            {{-- card --}}
            <div class="col-12 col-xl-4">
                <div class="card rounded-4">
                    <div class="card-body">
                        <p class="small">Info Mobil Elf</p>
                        <h5 class="card-title text-start fw-bold">Elf Garut Bandung 001</h5>

                        {{-- Destination --}}
                        <div class="container-fluid my-2">
                            <div class="row align-items-center">
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

                        {{-- Status --}}
                        <div class="container-fluid my-2">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center p-0">
                                    <p class="text-second-color fw-bold my-auto">Status Elf</p>
                                </div>

                                <div class="col text-end  p-0 my-2">
                                    <button type="button"
                                        class="bg-red-color-opacity text-red-color border-0 rounded-3 px-3 py-2"
                                        disabled>belum Berangkat</button>
                                </div>
                            </div>
                        </div>

                        {{-- driver --}}
                        <div class="container-fluid bg-grey-color rounded-4 my-2 p-3">
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
                        </div>
                    </div>
                </div>
            </div>

            {{-- Schedule --}}
            <div class="col-12 col-xl-4 mb-3 mb-md-5">
                <div class="card my-4 my-xl-0">
                    <div class="card-body">
                        <p class="small">Pilih Jadwal Keberangkatan</p>

                        {{-- Schedule1 --}}
                        <a href="seat" class="card-link text-decoration-none">
                            <div class="card">
                                <div class="card-body">

                                    {{-- price --}}
                                    <h3 class="card-title text-start fw-bold text-green-color">Rp 50.000</h3>

                                    {{-- destination --}}
                                    <div class="container-fluid mt-3">
                                        <div class="row">
                                            <div class="col text-start p-0 ">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Keberangkatan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1 ">09:00 WIB</p>
                                            </div>
                                            <div class="col text-end p-0">
                                                <div class="d-flex justify-content-end">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Kedatangan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1">12:00 WIB</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </a>


                        {{-- Schedule2 --}}
                        <a href="payment" class="card-link text-decoration-none">
                            <div class="card">
                                <div class="card-body">

                                    {{-- price --}}
                                    <h3 class="card-title text-start fw-bold text-green-color">Rp 50.000</h3>

                                    {{-- destination --}}
                                    <div class="container-fluid mt-3">
                                        <div class="row">
                                            <div class="col text-start p-0 ">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Keberangkatan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1 ">09:00 WIB</p>
                                            </div>
                                            <div class="col text-end p-0">
                                                <div class="d-flex justify-content-end">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Kedatangan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1">12:00 WIB</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </a>


                        {{-- Schedule3 --}}
                        <a href="payment" class="card-link text-decoration-none">
                            <div class="card">
                                <div class="card-body">

                                    {{-- price --}}
                                    <h3 class="card-title text-start fw-bold text-green-color">Rp 50.000</h3>

                                    {{-- destination --}}
                                    <div class="container-fluid mt-3">
                                        <div class="row">
                                            <div class="col text-start p-0 ">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Keberangkatan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1 ">09:00 WIB</p>
                                            </div>
                                            <div class="col text-end p-0">
                                                <div class="d-flex justify-content-end">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Kedatangan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1">12:00 WIB</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </a>


                        {{-- Schedule4 --}}
                        <a href="payment" class="card-link text-decoration-none">
                            <div class="card">
                                <div class="card-body">

                                    {{-- price --}}
                                    <h3 class="card-title text-start fw-bold text-green-color">Rp 50.000</h3>

                                    {{-- destination --}}
                                    <div class="container-fluid mt-3">
                                        <div class="row">
                                            <div class="col text-start p-0 ">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Keberangkatan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1 ">09:00 WIB</p>
                                            </div>
                                            <div class="col text-end p-0">
                                                <div class="d-flex justify-content-end">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Kedatangan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1">12:00 WIB</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </a>


                        {{-- Schedule5 --}}
                        <a href="payment" class="card-link text-decoration-none">
                            <div class="card">
                                <div class="card-body">

                                    {{-- price --}}
                                    <h3 class="card-title text-start fw-bold text-green-color">Rp 50.000</h3>

                                    {{-- destination --}}
                                    <div class="container-fluid mt-3">
                                        <div class="row">
                                            <div class="col text-start p-0 ">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Keberangkatan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1 ">09:00 WIB</p>
                                            </div>
                                            <div class="col text-end p-0">
                                                <div class="d-flex justify-content-end">
                                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                                    <p class="small text-dark my-auto ">Kedatangan</p>
                                                </div>
                                                <p class="fw-bold text-dark my-1">12:00 WIB</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </a>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
