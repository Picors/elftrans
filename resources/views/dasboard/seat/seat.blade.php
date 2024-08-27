@extends('layout.main')

@section('container')
    <div class="container my-4 px-3">
        <div class="row justify-content-center align-items-center">
            <div class="card col-lg-5">
                <div class="card-body">
                    <!--start status kursi-->
                    <h5 class="fw-bold">Pilih Kursi Anda</h5>
                    <div class="d-flex align-items-center">
                        <iconify-icon icon="zmdi:seat" class="text-second-color fs-6 me-2"></iconify-icon>
                        <p class="my-auto">Kursi Tersedia</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <iconify-icon icon="zmdi:seat" class="text-primary-color fs-6 me-2"></iconify-icon>
                        <p class="my-auto text-primary-color">Kursi yang anda pilih</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <iconify-icon icon="zmdi:seat" class="text-red-color fs-6 me-2"></iconify-icon>
                        <p class="my-auto text-red-color">Kursi sudah terpilih</p>
                    </div>
                    <!--end status kursi-->
                                        
                    <!--start memilih kursi-->
                    <div class="row align-items-center my-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <p class="my-auto text-dark">Kursi Dipilih</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="col rounded-3 bg-grey-color">
                                    <p class="text-secondary-color text-center fw-bold my-auto py-1 px-2">Belum Memilih</p>                                
                                </div>                      
                            </div>
                        </div>
                    </div>
                    <div class="row border-grey-color justify-content-center align-items-center mx-3 rounded-3">
                        <div class="col-lg-5 col-4 rounded-3 bg-grey-color">
                            <p class="text-secondary-color text-center fw-bold my-auto py-1 px-2">Depan</p>                                
                        </div>
                        <div class="row justify-content-between align-items-center py-1">
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" disabled/>
                                        <div class="radio-tile px-1 disabled">
                                            <p class="radio-tile-label-disabled fw-bold m-3 m-xl-4">A1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <img src="image/vector.png" alt="">
                            </div>
                        </div>
                        <!--kursi b  -->
                        <div class="row align-items-center py-1">
                            <div class="col-3">
                                <p class="text-secondary-color fw-bold my-auto text-center">Pintu</p>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group ">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">B1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">B2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">B3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- kursi c -->
                        <div class="row align-items-center justify-content-end py-1">
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">C1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">C2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">C3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- kursi D -->
                        <div class="row align-items-center justify-content-end py-1">
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">D1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">D2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">D3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    <!-- kursi e -->
                        <div class="row align-items-center justify-content-end py-1">
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">E1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">E2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">E3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="radio-tile-group">
                                    <div class="input-container">
                                        <input class="radio-button" type="radio" name="radio" />
                                        <div class="radio-tile px-1">
                                            <p class="radio-tile-label fw-bold m-3 m-xl-4">E4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-5 rounded-3 bg-grey-color">
                            <p class="text-secondary-color text-center fw-bold my-auto py-1 px-2">Belakang</p>                                
                        </div>
                    </div>
                    <div class="d-grid gap-2 my-3">
                        <a href="payment" class="btn bg-primary-color text-light fw-bold rounded-3 py-2">Lanjut</a>
                    </div> 
                    <!--end memilih kursi-->
            </div>
        </div>
    </div>
@endsection
