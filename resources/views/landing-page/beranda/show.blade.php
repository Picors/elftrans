@extends('layout.main')
@section('container')
    <!-- Begin Page Content -->

    <!-- start hero -->
    <div class="d-flex flex-column col-md-12">
        <img src="{{ asset($blog->gambar) }}" class="img-fluid" alt="{{ $blog->judul }}" height="200">
    </div>
    <!-- end hero -->

    <!-- start content -->
    <div class="justify-content-center text-center py-5 width-90">
        <h3 class="text-primary-color fw-bold">{{ $blog->judul }}</h3>
        <p class="text-secondary">{{ $blog->created_at->format('d F Y') }}</p>
        <div class="mx-lg-5 px-lg-5">
            <div class="d-flex flex-column align-items-center">
                <div class="col-md-8 col-sm-12 mt-3 px-2">
                    <div class="card text-start shadow">
                        <div class="card-body">
                            <p class="card-text">{{ $blog->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <a href="{{ route('blog') }}" class="btn bg-second-color text-primary-color fw-bold">Kembali ke Blog</a>
        </div>
    </div>
    <!-- end content -->
@endsection
