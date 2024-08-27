@extends('layout.main')

@section('container')
    <div class="container-fluid text-center width-90 my-2 my-md-5">
        <div class="row justify-content-center align-items-start">

            {{-- Detail payment --}}
            <div class="col-12 col-xl-4">
                <h5 class="text-start fw-bold text-primary-color mb-4 mt-3 mt-md-0">Rincian Pembayaran</h5>
                <div class="card rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-start fw-bold">Elf Garut Bandung 001</h5>

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
                                    <p class=" my-auto mb-2">Garut</p>
                                    <div class="d-flex mb-2">
                                        <i class="bi bi-geo-alt-fill text-primary-color fs-6 me-1"></i>
                                        <p class="small text-dark my-auto">Keberangkatan</p>
                                    </div>
                                    <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                                </div>

                                <div class="col text-end p-0">
                                    <p class=" my-auto mb-2">Bandung</p>
                                    <p class="small text-dark my-auto mb-2">Kedatangan<i
                                            class="bi bi-geo-alt-fill text-primary-color me-1"></i></p>
                                    <p class="text-dark fw-bold my-1 ">09:00 WIB</p>
                                </div>
                            </div>
                        </div>

                        {{-- line --}}
                        <hr class="striped-line">

                        {{-- price --}}
                        <div class="row align-items-center ">
                            <div class="col">
                                <p class="text-dark text-start fs-5 my-auto">Total Pembayaran</p>
                            </div>
                            <div class="col">
                                <h5 class="fw-bold text-end text-green-color my-auto">Rp 50.000</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- payment method --}}
            <div class="text-start col-12 col-xl-3">
                <h5 class="fw-bold text-primary-color mb-4 mt-3 mt-xl-0">Pilih Metode Pembayaran</h5>

                {{-- BCA --}}
                <div class="card rounded-4 border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="form-check p-0">
                            <div class="row align-items-center">

                                <div class="col-7">
                                    <div class="d-flex">
                                        <img src="logo/Icon_BCA.png" class="bg-second-color rounded-3" alt="">
                                        <p class="text-dark my-auto ms-2 ">Bank BCA</p>
                                    </div>
                                </div>

                                {{-- checkbox --}}
                                <div class="col d-flex justify-content-end">
                                    <input class="form-check-input custom-form-check rounded-2 fs-4 " type="checkbox" onchange="updateCheckboxes(this)"
                                        name="paymentMethod" id="flexCheckBCA">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Alfamart --}}
                <div class="card rounded-4 border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="form-check p-0">
                            <div class="row align-items-center">

                                <div class="col">
                                    <div class="d-flex">
                                        <img src="logo/Logo_Alfamart.png" class="bg-second-color rounded-3" alt="">
                                        <p class="text-dark my-auto ms-2 ">Alfamart</p>
                                    </div>
                                </div>

                                {{-- checkbox --}}
                                <div class="col d-flex justify-content-end">
                                    <input class="form-check-input custom-form-check rounded-2 fs-4 " type="checkbox" onchange="updateCheckboxes(this)"
                                        name="paymentMethod" id="flexCheckAlfamart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Indomart --}}
                <div class="card rounded-4 border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="form-check p-0">
                            <div class="row align-items-center">

                                <div class="col">
                                    <div class="d-flex">
                                        <img src="logo/Logo_Indomaret.svg" class="bg-second-color rounded-3" height="32px"
                                            width="32px" alt="">
                                        <p class="text-dark my-auto ms-2 ">Indomaret</p>
                                    </div>
                                </div>

                                {{-- checkbox --}}
                                <div class="col d-flex justify-content-end">
                                    <input class="form-check-input custom-form-check rounded-2 fs-4 " type="checkbox" onchange="updateCheckboxes(this)"
                                        name="paymentMethod" id="flexCheckIndomaret">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Gopay --}}
                <div class="card rounded-4 border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="form-check p-0">
                            <div class="row align-items-center">

                                <div class="col">
                                    <div class="d-flex">
                                        <img src="logo/Logo_Gopay.png" class="bg-second-color rounded-3" height="32px"
                                            width="32px" alt="">
                                        <p class="text-dark my-auto ms-2 ">Gopay</p>
                                    </div>
                                </div>

                                {{-- checkbox --}}
                                <div class="col d-flex justify-content-end">
                                    <input class="form-check-input custom-form-check rounded-2 fs-4 " type="checkbox" onchange="updateCheckboxes(this)"
                                        name="paymentMethod" id="flexCheckGopay">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Dana --}}
                <div class="card rounded-4 border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="form-check p-0">
                            <div class="row align-items-center">

                                <div class="col">
                                    <div class="d-flex">
                                        <img src="logo/Logo_Dana.png" class="bg-second-color rounded-3" height="32px"
                                            width="32px" alt="">
                                        <p class="text-dark my-auto ms-2 ">Dana</p>
                                    </div>
                                </div>

                                {{-- checkbox --}}
                                <div class="col d-flex justify-content-end">
                                    <input class="form-check-input custom-form-check rounded-2 fs-4 " type="checkbox" onchange="updateCheckboxes(this)"
                                        name="paymentMethod" id="flexCheckDana">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Ovo --}}
                <div class="card rounded-4 border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="form-check p-0">
                            <div class="row align-items-center">

                                <div class="col">
                                    <div class="d-flex">
                                        <img src="logo/Logo_Ovo.png" class="bg-second-color rounded-3" height="32px"
                                            width="32px" alt="">
                                        <p class="text-dark my-auto ms-2 ">Ovo</p>
                                    </div>
                                </div>

                                {{-- checkbox --}}
                                <div class="col d-flex justify-content-end">
                                    <input class="form-check-input custom-form-check rounded-2 fs-4 " type="checkbox" onchange="updateCheckboxes(this)"
                                        name="paymentMethod" id="flexCheckOvo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <div class="d-grid gap-2 my-3">
                    <a href="transfer" class="btn bg-primary-color text-light fw-bold rounded-3 py-2">Lanjut</a>
                </div>
            </div>
        </div>

    </div>

    <script>
        function updateCheckboxes(checkbox) {
            const checkboxes = document.getElementsByName(checkbox.name);

            for (let i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] !== checkbox) {
                    checkboxes[i].checked = false;
                }
            }
        }
    </script>
@endsection
