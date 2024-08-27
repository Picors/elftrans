@extends('layout.main')
@section('container')
    <!-- Begin Page Content -->

    <!-- start hero -->
    <div class="d-flex flex-column col-md-12">
        <img src="image/Hero_Banner_3.png" class="img-fluid" alt="">
    </div>
    <!-- end hero -->

    <!-- start content -->
    <div class="justify-content-center text-center py-5 width-90">
        <h3 class="text-primary-color fw-bold">Blog Terbaru</h3>
        <p>Dapatkan informasi terbaru tentang kami dan seputar lainnya.</p>
        <div class="mx-lg-5 px-lg-5">
            <div class="d-flex flex-wrap justify-content-start">
                {{-- Loop through blogs --}}
                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-sm-12 mt-3 px-2">
                        <div class="card text-start shadow">
                            <img src="{{ asset($blog->gambar) }}" class="card-img-top" alt="{{ $blog->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->judul }}</h5>
                                <p class="card-text maxline">{{ $blog->deskripsi }}</p>
                                <p class="card-text text-primary-color">{{ $blog->created_at->format('d F Y') }}</p>
                                <div class="d-grid gap-2 mt-3">
                                    <a href="{{ route('blog.show', $blog->id) }}"
                                        class="btn bg-second-color text-primary-color fw-bold">Baca selengkapnya</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-between mt-5">
            <a href="{{ $blogs->previousPageUrl() }}"><i class="bi bi-chevron-left text-primary-color"></i></a>
            <div>
                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                    <a href="{{ $blogs->url($i) }}"
                        class="text-decoration-none {{ $blogs->currentPage() == $i ? 'link-opacity-100' : 'text-secondary' }}">{{ $i }}</a>
                @endfor
            </div>
            <a href="{{ $blogs->nextPageUrl() }}"><i class="bi bi-chevron-right text-primary-color"></i></a>
        </div>
    </div>

    <!-- end content -->
@endsection
