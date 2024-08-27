@extends('layout.main') @section('container')
    <!-- Begin Page Content -->
    <!-- start hero -->
    <div class="d-flex flex-column col-md-12">
        <img src="image/Hero_Banner_4.png" class="img-fluid" alt="">
    </div>
    <!-- end hero -->
    <!-- start content -->
    <div class="justify-content-center text-center width-90 my-5">
        <h3 class="text-primary-color fw-bold">Mari Lebih Dekat</h3>
        <p>kami terbuka untuk saran apa pun atau sekedar ngobrol</p>
        <!-- card start -->
        <div class="d-flex justify-content-center align-items-center flex-md-row flex-sm-column flex-column">
            {{-- Content --}} <div
                class="card text-start col-md-4 col-sm-12 col-12 mx-1 px-2 my-2 my-md-0 rounded-4 shadow ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="col-1">
                            <i class="bi bi-geo-alt-fill fs-3 text-primary-color"></i>
                        </div>
                        <div class="col-11 ps-3">
                            <p class="card-title fs-5 fw-bold">Kantor Kami</p>
                            <p class="card-subtitle">{{ $konten->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-start col-md-4 col-sm-12 col-12 mx-1 px-2 my-2 my-md-0 rounded-4 shadow ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="col-1">
                            <i class="bi bi-telephone-fill fs-3 text-primary-color"></i>
                        </div>
                        <div class="col-11 ps-3">
                            <p class="card-title fs-5 fw-bold">Telepon Kami</p>
                            <p class="card-subtitle">
                                {{ $konten->link_whatsapp }}
                            </p>
                            <a href="https://wa.me/{{ $konten->link_whatsapp }}"
                                class="btn bg-primary-color text-light col-6">Kirim Pesan Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-start col-md-4 col-sm-12 col-12 mx-1 px-2 my-2 my-md-0 rounded-4 shadow ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="col-1">
                            <i class="bi bi-envelope-fill fs-3 text-primary-color"></i>
                        </div>
                        <div class="col-11 ps-3">
                            <p class="card-title fs-5 fw-bold">Email Kami</p>
                            <p class="card-subtitle">{{ $konten->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- form start -->
        <div class="d-flex mt-3 flex-wrap text-start justify-content-between">
            <div class="d-flex flex-column col-md-5 col-12 mt-3 order-lg-first order-last">
                <h3 class="text-primary-color fw-bold">Ada Pertanyaan?</h3>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form class="row g-2" method="POST" action="{{ route('kontak.store') }}">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="nama" class="control-label fw-bold xtra-small-font">Nama</label>
                            <div class="input-group mb-2 ">
                                <span class="input-group-text bg-grey-color"><i
                                        class="bi bi-person-fill text-grey-color"></i></span>
                                <input type="text" class="form-control bg-grey-color" placeholder="Masukan Nama"
                                    id="nama" name="nama" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="email" class="control-label fw-bold xtra-small-font">Email</label>
                            <div class="input-group mb-2 ">
                                <span class="input-group-text bg-grey-color"><i
                                        class="bi bi-envelope-fill text-grey-color"></i></span>
                                <input type="email" class="form-control bg-grey-color" placeholder="Masukan Email"
                                    id="email" name="email" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-feedback">
                            <label for="subjek" class="control-label fw-bold xtra-small-font">Subjek</label>
                            <div class="input-group mb-2 ">
                                <span class="input-group-text bg-grey-color"><i
                                        class="bi bi-envelope-fill text-grey-color"></i></span>
                                <input type="text" class="form-control bg-grey-color" placeholder="Masukan Subjek"
                                    id="subjek" name="subjek" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="pesan" class="form-label">Pesan Kamu</label>
                        <textarea class="form-control bg-grey-color" id="pesan" name="pesan" rows="6" placeholder="Masukan Pesan"
                            required></textarea>
                    </div>
                    <div class="col-12 mt-2">
                        <button type="submit" class="btn bg-primary-color text-light col-12">Kirim Pesan</button>
                    </div>
                </form>

            </div>
            <!-- map -->
            <iframe class="col-md-6 mt-3 order-first order-lg-last" src="{{ $konten->link_google_maps }}" width="600"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- end map -->
        </div>
        <!-- end form -->
    </div>
    <!-- end content -->
@endsection
