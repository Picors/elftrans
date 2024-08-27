@extends('layout.main')

@section('container')
    {{-- Hero --}}
    <div class="d-flex flex-column col-md-12">
        <img src="image/Hero_Banner_2.png" class="img-fluid" alt="">
    </div>

    {{-- Content --}}
    <div class="justify-content-center text-center py-5 width-90">
        <h3 class=" text-primary-color">Pertanyaan yang Sering Muncul</h3>
        <p class="col-0 col-md-9 mx-auto">Lorem ipsum dolor sit amet consectetur. Habitasse quam ultrices porttitor
            ullamcorper aliquet commodo. Orci aliquet vitae sed amet maecenas enim sed in. Volutpat sagittis nibh tristique
            neque. </p>
        <div class="container py-4 text-center">
            <div class="row row-cols-1 row-cols-md-2 gx-5">

                @foreach ($faqs as $index => $faq)
                    <div class="col-0 col-md-5 mx-auto">
                        {{-- Collaps --}}
                        <div class="d-grid gap-2 mt-3">
                            <button
                                class="btn btn-light text-primary-color border border-info d-flex align-items-center rounded-3"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample{{ $index }}" aria-expanded="false"
                                aria-controls="collapseExample{{ $index }}"
                                onclick="toggleIcon('toggleIcon{{ $index }}')">
                                <i class="bi bi-plus fs-2 fw-bold" id="toggleIcon{{ $index }}"></i>
                                <p class="my-auto ms-4 text-dark">{{ $faq->nama_pertanyaan }}</p>
                            </button>
                        </div>
                        <div class="collapse" id="collapseExample{{ $index }}">
                            <div class="container text-start mt-3">
                                {{ $faq->jawaban }}
                            </div>
                        </div>
                        {{-- endCollaps --}}
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    {{-- endContent --}}

    <!-- script change + t - -->
    <script>
        function toggleIcon(iconId) {
            var toggleIcon = document.getElementById(iconId);
            toggleIcon.classList.toggle('bi-plus');
            toggleIcon.classList.toggle('bi-dash');
        }
    </script>
@endsection
