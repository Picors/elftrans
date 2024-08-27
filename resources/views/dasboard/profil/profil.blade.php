@extends('layout.main')
@section('container')
<!-- Begin Page Content -->

    <!-- start hero -->
    <div class="d-flex flex-column col-md-12">
            <img src="image/Hero_Banner_5.png" class="img-fluid" alt="">
        </div>
    <!-- end hero -->

    <!-- start content -->
    <div class="width-90 mt-5">

        <!-- form -->
        <form action="">
        <h3 class="text-primary-color fw-bold text-center mt-5">Profil Akun</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 mt-3 mb-5">
                    <div class="card rounded-3 shadow">
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="nama_depan" class="control-label fw-bold xtra-small-font">Nama
                                                Depan</label>
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text bg-grey-color"><i
                                                        class="bi bi-person-fill text-grey-color"></i></span>
                                                <input type="text" class="form-control bg-grey-color "
                                                    placeholder="Masukan Nama Depan " id="nama_depan" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="nama_belakang"
                                                class="control-label fw-bold xtra-small-font">Nama Belakang</label>
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text bg-grey-color"><i
                                                        class="bi bi-person-fill text-grey-color"></i></span>
                                                <input type="text" class="form-control bg-grey-color "
                                                    placeholder="Masukan Nama Belakang " id="nama_belakang" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="nomor" class="control-label fw-bold xtra-small-font">No Handphone<span class="text-danger">*</span></label>
                                        <div class="input-group mb-2 ">
                                            <span class="input-group-text bg-grey-color text-grey-color fw-bold">+62</span>
                                        <input type="text" class="form-control bg-grey-color " placeholder="Masukan Nomor Handphone" id="nomor" />
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="username" class="control-label fw-bold xtra-small-font">Username</label>
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text bg-grey-color"><i
                                                        class="bi bi-person-fill text-grey-color"></i></span>
                                                <input type="text" class="form-control bg-grey-color "
                                                    placeholder="Masukan Username " id="username" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="email" class="control-label fw-bold xtra-small-font">Email</label>
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text bg-grey-color"><i
                                                        class="bi bi-envelope-fill text-grey-color"></i></span>
                                                <input type="email" class="form-control bg-grey-color "
                                                    placeholder="Masukan Email" id="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="alamat"
                                                class="control-label fw-bold xtra-small-font">Alamat</label>
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text bg-grey-color"><i
                                                        class="bi bi bi-geo-alt-fill text-grey-color"></i></span>
                                                <input type="text" class="form-control bg-grey-color "
                                                    placeholder="Masukan Alamat " id="alamat" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="kode_zip" class="control-label fw-bold xtra-small-font">Kode Zip</label>
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text bg-grey-color"><i
                                                        class="bi bi-person-fill text-grey-color"></i></span>
                                                <input type="text" class="form-control bg-grey-color "
                                                    placeholder="Masukan Kode Zip " id="kode_zip" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- <button class="btn bg-primary-color text-light col-12 fw-bold" type="submit">Masuk</button> -->
                    <a href="login" class="btn bg-primary-color py-3 py-lg-2 text-light col-12 mt-3 fw-bold"
                                type="submit">Perbarui Profil</a>
                </div>
            </div>
        </form>
    </div>
    <!-- end content -->
@endsection