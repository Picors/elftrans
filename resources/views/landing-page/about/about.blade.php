@extends('layout.main')
@section('container')
    <!-- Begin Page Content -->

    <!-- start hero -->
    <div class="d-flex flex-column col-md-12">
        <img src="image/Hero_Banner_1.png" class="img-fluid" alt="">
    </div>
    <!-- end hero -->

    <!-- start content -->
    <div class="width-90">
        <div class="d-flex mt-5 flex-wrap">
            <div class="d-flex flex-column col-md-7 ">
                <h3 class="text-primary-color fw-bold">Lebih Kenal dengan Elfin</h3>
                <p>{{ $konten->tentang_1 }}</p>

            </div>
            <img class="img-fluid mt-2 col-md-5" src="{{ asset('uploads/' . $konten->gambar_tentang) }}" alt="">
        </div>
        <div class="mt-3 mb-5">
            <h3 class="text-primary-color fw-bold ">Tentang Kami</h3>
            <p>{{ $konten->tentang_2 }}</p>

        </div>
    </div>
    <!-- end content -->
@endsection
