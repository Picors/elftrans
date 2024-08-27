@extends('layout.main')

@section('container')

    <div class="container-fluid width-90">
        <div class="row">

            {{-- Detail Payment --}}
            <div class="col-12 col-xl-6 ps-0 mb-0 mb-xl-5 pe-0 pe-xl-3">
                <h4 class="text-primary-color fw-bold mt-5 mb-3">Rincian Pembayaran</h4>

                {{-- Virtual Account --}}
                <div class="container bg-second-color rounded-3 p-4">
                    <p class="text-primary-color text-center my-auto mb-3">No. Rek/Virtual Account</p>
                    <h3 class="fw-bold text-center text-primary-color">123 4567 8901 2345</h3>
                </div>

                {{-- pay on time --}}
                <div class="row align-items-start my-3">
                    <div class="col-5">
                        <p class="text-dark fs-5 my-auto">Bayar dalam</p>
                    </div>
                    <div class="col-7 text-end">
                        <p class="fw-bold text-primary-color my-auto" >23 Jam 59 Menit 59 Detik</p>
                        <p class="small my-auto">Jatuh tempo 15-11-2023, 10:14</p>
                    </div>
                </div>

                {{-- detail payment --}}
                <div class="container-fluid bg-grey-color rounded-4 my-2 p-4">
                    <h5 class="fw-bold">Elf Bandung Garut 001</h5>
                    <div class="row my-3">
                        <div class="col">
                            <p class="my-auto">Order ID</p>
                        </div>
                        <div class="col text-end">
                            <p class="fw-bold my-auto">1234567890</p>
                        </div>
                    </div>

                    {{-- line --}}
                    <hr class="striped-line">

                    {{-- chair --}}
                    <div class="row justify-content-between align-items-center my-3">

                        <div class="col">
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                                <p class="my-auto">Kursi Terpilih</p>
                            </div>
                        </div>

                        <div class="col text-end">
                            <p class="text-dark fw-bold my-auto">A-1</p>
                        </div>
                    </div>

                    {{-- schedule --}}
                    <div class="row justify-content-between align-items-center mb-3">
                        <div class="col text-start">
                            <p class="my-auto">Jadwal Keberangkatan</p>
                        </div>
                        <div class="col text-end">
                            <p class="text-dark fw-bold my-auto">15-11-2023</p>
                        </div>
                    </div>

                    {{-- Destination --}}
                    <div class="container-fluid my-2">
                        <div class="row align-items-center">
                            <div class="col text-start p-0 ">
                                <div class="d-flex mb-2">
                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                    <p class="text-dark my-auto">Garut</p>
                                </div>
                                <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                            </div>

                            <div class="col text-end p-0">
                                <div class="d-flex justify-content-end mb-2">
                                    <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                    <p class="text-dark my-auto">Bandung</p>
                                </div>
                                <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                            </div>
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="container-fluid mt-2">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center p-0">
                                <p class="text-second-color my-auto">Status</p>
                            </div>

                            <div class="col text-end  p-0 ">
                                <button type="button"
                                    class="small bg-red-color-opacity text-red-color border-0 rounded-3 px-3 py-2"
                                    disabled>Belum Bayar</button>
                            </div>
                        </div>
                    </div>

                    {{-- Payment method --}}
                    <div class="container-fluid mt-2">
                        <div class="row align-items-center">
                            <div class="col-4 p-0">
                                <p class="text-second-color my-auto">Metode Pembayaran</p>
                            </div>

                            <div class="col text-end">
                                <p class="fw-bold text-dark my-auto">Bank</p>
                            </div>
                        </div>
                    </div>

                    {{-- order date --}}
                    <div class="container-fluid my-2">
                        <div class="row align-items-center">
                            <div class="col-4 p-0">
                                <p class="text-second-color my-auto">Tanggal Pemesanan</p>
                            </div>

                            <div class="col text-end">
                                <p class="fw-bold text-dark my-auto">14-11-2023</p>
                            </div>
                        </div>
                    </div>

                    {{-- line --}}
                    <hr class="striped-line">

                    {{-- price --}}
                    <div class="row align-items-center ">
                        <div class="col-7">
                            <p class="text-dark text-start fs-5 my-auto">Total Pembayaran</p>
                        </div>
                        <div class="col-5">
                            <h5 class="fw-bold text-end my-auto">Rp 50.000</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- How to pay --}}
            <div class="col-12 col-xl-6 mb-3 mb-xl-5 pe-0 ps-0 ps-xl-3" >
                <h4 class=" fw-bold mt-5 mb-3">Petunjuk Transfer Bank :</h4>
                <hr class="solid">

                {{-- no 1 --}}
                <div class="d-flex align-items-center mb-3">
                    <p class="fs-5 bg-second-color text-primary-color rounded-3 py-2 px-3 my-auto me-3">1</p>
                    <p class="text-dark my-auto">Pilih m-Transfer > BCA Virtual Account.</p>
                </div>

                {{-- no 2 --}}
                <div class="d-flex align-items-center mb-3">
                    <p class="fs-5 bg-second-color text-primary-color rounded-3 py-2 px-3 my-auto me-3">2</p>
                    <p class="text-dark my-auto">Masukkan nomor Virtual Account di atas 128081234567890 dan pilih send.</p>
                </div>

                {{-- no 3 --}}
                <div class="d-flex align-items-start ">
                    <p class="fs-5 bg-second-color text-primary-color rounded-3 py-2 px-3 me-3">3</p>
                    <p class="text-dark">Periksa informasi yang tertera di layar. Pastikan Merchant adalah Desmart, Total tagihan sudah benar dan username kamu Syahrul Ramdan. Jika benar, pilih Ya.</p>
                </div>

                {{-- no 4 --}}
                <div class="d-flex align-items-center mb-3">
                    <p class="fs-5 bg-second-color text-primary-color rounded-3 py-2 px-3 my-auto me-3">4</p>
                    <p class="text-dark my-auto">Masukkan PIN m-BCA Anda dan pilih OK.</p>
                </div>

                {{-- no 5 --}}
                <div class="d-flex d-flex align-items-start ">
                    <p class="fs-5 bg-second-color text-primary-color rounded-3 py-2 px-3  me-3">5</p>
                    <p class="text-dark ">Jika muncul notifikasi “Transaksi Gagal. Nominal melebihi limit harian”, mohon ulangi transaksi menggunakan KlikBCA (iBanking) atau ATM.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
