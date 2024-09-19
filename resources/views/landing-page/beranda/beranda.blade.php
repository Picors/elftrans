@extends('layout.main')

@section('container')
    <!-- Begin Page Content -->

    <!-- Hero -->
    <div class="p-5 text-center bg-image rounded-5 rounded-top-0"
        style="background-image: url('image/Hero_Banner_Landing.png'); object-fit:fill; background-repeat:no-repeat;  background-position: center center;">
        <div class="row justify-content-center">


            <div class="col-12 col-md-8 justify-content-center">
                <div class="text-white">
                    <h1 class="mb-3 text-primary-color">Mau Kemana Hari ini ?</h1>
                    <p class="mb-3 text-light">Tentukan Destinasi Tujuan Kamu</p>
                    <div class="card rounded-4">
                        <div class="card-body p-4">
                            <div class="container-fluid">
                                <form action="{{ route('cari_mobil_elf') }}" method="GET">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 p-0 ps-md-0">
                                            {{-- Lokasi Awal --}}
                                            <div class="form-group me-auto me-lg-3 text-start">
                                                <label for="lokasi_awal" class="fw-bold mb-1">Lokasi Awal</label>
                                                <select name="lokasi_awal" id="lokasi_awal"
                                                    class="form-control border bg-body-tertiary text-secondary rounded-4">
                                                    <option value="">Pilih Lokasi Awal</option>
                                                    @foreach ($rute as $lokasi)
                                                        <option value="{{ $lokasi->id }}">{{ $lokasi->nama_tempat }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 p-0 mt-3 mt-lg-0">
                                            {{-- Lokasi Tujuan --}}
                                            <div class="form-group text-start my-2 my-md-0 mx-0 mx-lg-3">
                                                <label for="lokasi_tujuan" class="fw-bold mb-1">Lokasi Tujuan</label>
                                                <select name="lokasi_tujuan" id="lokasi_tujuan"
                                                    class="form-control border bg-body-tertiary text-secondary rounded-4">
                                                    <option value="">Pilih Lokasi Tujuan</option>
                                                    @foreach ($rute as $lokasi)
                                                        <option value="{{ $lokasi->id }}">{{ $lokasi->nama_tempat }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 p-0 mt-3 mt-lg-0">
                                            {{-- Jadwal Keberangkatan --}}
                                            <div class="form-group mx-0 ms-lg-3 text-start">
                                                <label for="tanggal_keberangkatan" class="fw-bold mb-1">Jadwal
                                                    Keberangkatan</label>
                                                <input type="date" name="tanggal_keberangkatan"
                                                    id="tanggal_keberangkatan"
                                                    class="form-control border bg-body-tertiary text-secondary rounded-4">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Button Cari Elf --}}
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn bg-primary-color text-light fw-bold">Cari
                                            Elf</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- Hero -->

    <!-- Content  -->

    {{-- Service --}}
    <div class="justify-content-center width-90 my-0 mx-auto">
        <div class="text-center">
            <h3 class="mt-4 text-primary-color">Berangkat Hanya 3 Langkah</h3>
            <p>Tidak perlu repot-repot untuk bepergian. Dengan ini, kamu bisa mendapatkan elf untuk perjalanan yang nyaman.
            </p>
            <div class=" d-flex justify-content-between align-items-center flex-wrap">

                {{-- content --}}
                <div class="col-md-4 px-2 my-2 my-md-0">
                    <div class="card rounded-4 shadow">
                        <div class="card-body py-4">
                            <img src="image/icon_cari_rute.png" alt="" width="96px" height="96px">
                            <h5 class="mt-3 text-primary-color">Cari Rute</h5>
                            <p class="text-dark px-5">Pilih lokasi awal dan lokasi tujuan, serta tentukan tanggal
                                keberangkatan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-2 my-2 my-md-0">
                    <div class="card rounded-4 shadow">
                        <div class="card-body py-4">
                            <img src="image/icon_pilih_elf.png" alt="" width="96px" height="96px">
                            <h5 class="mt-3 text-primary-color">Pilih Elf</h5>
                            <p class="text-dark px-5">Tentukan elf mana yang akan kamu naiki berdasarkan jadwal
                                keberangkatannya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-2 my-2 my-md-0">
                    <div class="card  rounded-4 shadow ">
                        <div class="card-body py-4">
                            <img src="image/icon_bayar_tiket.png" alt="" width="96px" height="96px">
                            <h5 class="mt-3 text-primary-color">Naiki Elf</h5>
                            <p class="text-dark px-5">Naiki Elf Sesuai Tujuan.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        {{-- About --}}
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-5">

                <h3 class="text-primary-color mb-3 mt-2 mt-lg-0">Lebih Kenal dengan ElfTrans</h3>

                <p>{{ $konten->tentang_1 }} </p>

                {{-- button --}}
                <a class="btn bg-primary-color text-light fw-bold col-md-3 py-2 my-2 my-md-0"
                    href="{{ route('tentang-kami') }}">Lebih
                    Lanjut</a>

                <p class="fw-bold fs-5 mt-2 mt-lg-3">Supported By</p>

                {{-- Sponsored --}}
                <!-- Start Sponsor Section -->
                <div class="text-center text-lg-start my-5">
                    @foreach ($sponsor as $spon)
                        <img class="img-fluid mx-0 mx-md-2" src="{{ asset($spon->gambar) }}" alt="Sponsor Image"
                            width="100">
                    @endforeach
                </div>
                <!-- End Sponsor Section -->

            </div>
            <div class="col-12 col-lg-7 mt-4 mt-lg-0">
                <img class="img-fluid col-12" src="{{ asset('uploads/' . $konten->gambar_tentang) }}" alt=""
                    height="50%">
            </div>
        </div>

        {{-- Statistic --}}
        <div class="d-md-flex justify-content-md-evenly my-5">
            <div class="text-center col-md-3">
                <h3 class="text-yellow-color">32</h3>
                <p class="fs-5">Destinasi Populer</p>
            </div>

            {{-- garis --}}
            <div class="vr d-md-block d-none"></div>
            <div class="divider pb-1 bg-grey-color rounded-5 d-md-none mx-auto" style="width: 30%;"></div>
            {{--  --}}

            <div class="text-center col-md-3 my-3 my-md-0">
                <h3 class="text-yellow-color">680</h3>
                <p class="fs-5">Perjalanan Sukses</p>
            </div>

            {{-- garis --}}
            <div class="vr d-md-block d-none"></div>
            <div class="divider pb-1 bg-grey-color rounded-5 d-md-none mx-auto" style="width: 30%;"></div>
            {{--  --}}

            <div class="text-center col-md-3 mt-3 mt-md-0">
                <h3 class="text-yellow-color">540</h3>
                <p class="fs-5">Pelanggan Yang Bahagia</p>
            </div>
        </div>
        {{-- end --}}
    </div>

    {{-- Testimonyal --}}
    <div class="containter text-center bg-second-color py-2 py-md-5 p-md-5" style="width: 100%">
        <h3 class="text-primary-color">Testimoni</h3>
        <p class="text-primary-color">Beberapa ulasan dari pengguna layanan Elfin kami, semoga bermanfaat.</p>

        {{-- Testimoni Web --}}
        <div class="d-md-flex justify-content-evenly d-md-block d-none">
            {{-- Content --}}
            <div class="card text-start col-3 rounded-4 p-4 mx-2">
                <div class="car-body">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle me-1 " src="image/person.png" alt="">
                        <div>
                            <h5>Savanah Nguyen</h5>
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>

                            </div>
                        </div>
                    </div>
                    <p>Terbantu banget pake layanan ini, jadi nggak perlu nunggu lama tinggal dateng sesuai jadwal, lalu
                        berangkat deh.</p>
                </div>
            </div>
            <div class="card text-start col-3 rounded-4 p-4 mx-2">
                <div class="car-body">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle me-1 " src="image/person.png" alt="">
                        <div>
                            <h5>Savanah Nguyen</h5>
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>

                            </div>
                        </div>
                    </div>
                    <p>Terbantu banget pake layanan ini, jadi nggak perlu nunggu lama tinggal dateng sesuai jadwal, lalu
                        berangkat deh.</p>
                </div>
            </div>
            <div class="card text-start col-3 rounded-4 p-4 mx-2">
                <div class="car-body">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle me-1 " src="image/person.png" alt="">
                        <div>
                            <h5>Savanah Nguyen</h5>
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>

                            </div>
                        </div>
                    </div>
                    <p>Terbantu banget pake layanan ini, jadi nggak perlu nunggu lama tinggal dateng sesuai jadwal, lalu
                        berangkat deh.</p>
                </div>
            </div>
        </div>

        {{-- Corousel For Testimoni Mobile --}}

        <div class="carousel-container d-sm-block d-md-none">
            <div class="carousel-slide">
                <div class="card text-start rounded-4 p-4 mx-2">
                    <div class="car-body">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-1" src="image/person.png" alt="">
                            <div>
                                <h5>Savanah Nguyen</h5>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                </div>
                            </div>
                        </div>
                        <p>Terbantu banget pake layanan ini, jadi nggak perlu nunggu lama tinggal dateng sesuai jadwal,
                            lalu
                            berangkat deh.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="card text-start rounded-4 p-4 mx-2">
                    <div class="car-body">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-1" src="image/person.png" alt="">
                            <div>
                                <h5>Savanah Nguyen</h5>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                </div>
                            </div>
                        </div>
                        <p>Terbantu banget pake layanan ini, jadi nggak perlu nunggu lama tinggal dateng sesuai jadwal,
                            lalu
                            berangkat deh.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="card text-start rounded-4 p-4 mx-2">
                    <div class="car-body">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-1" src="image/person.png" alt="">
                            <div>
                                <h5>Savanah Nguyen</h5>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>

                                </div>
                            </div>
                        </div>
                        <p>Terbantu banget pake layanan ini, jadi nggak perlu nunggu lama tinggal dateng sesuai jadwal,
                            lalu
                            berangkat deh.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-pointers"></div>
        </div>
    </div>


    {{-- Blog --}}
    <div class="justify-content-center text-center py-5 width-90 my-0 mx-auto">
        <h3 class="text-primary-color">Blog Terbaru</h3>
        <p>Dapatkan informasi terbaru tentang kami dan seputar lainnya.</p>
        <div class="d-flex flex-wrap">
            {{-- Loop through latest 3 blogs --}}
            @foreach ($latestBlogs as $blog)
                <div class="col-md-4 px-2 py-2 py-md-0">
                    <div class="card text-start rounded-4 shadow">
                        <img src="{{ asset($blog->gambar) }}" class="card-img-top rounded-4 rounded-bottom-2"
                            alt="{{ $blog->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->judul }}</h5>
                            <p class="card-text maxline">{{ $blog->deskripsi }}</p>
                            <p class="card-text text-primary-color">{{ $blog->created_at->format('d F Y') }}</p>
                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ route('blog.show', $blog->id) }}"
                                    class="btn bg-second-color rounded-4 text-primary-color fw-bold">Baca
                                    Selengkapnya</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- Button --}}
        <a href="blog" class="btn bg-primary-color text-light fw-bold px-4 py-2 mt-4">Lihat Lebih Banyak</a>

        {{-- Ads For Web --}}
        <div class="d-md-flex py-1 py-md-5 mt-5 d-md-block d-none">
            <div class="col-4 px-2">
                <div class="container bg-grey-color d-flex justify-content-center align-items-center rounded-4"
                    style="height: 160px">
                    <p>Ads</p>
                </div>
            </div>
            <div class="col-4 px-2">
                <div class="container bg-grey-color d-flex justify-content-center align-items-center rounded-4"
                    style="height: 160px">
                    <p>Ads</p>
                </div>
            </div>
            <div class="col-4 px-2">
                <div class="container bg-grey-color d-flex justify-content-center align-items-center rounded-4"
                    style="height: 160px">
                    <p>Ads</p>
                </div>
            </div>
        </div>

        {{-- Corousel for Ads Mobile --}}
        <div id="carouselForAds" class="carousel carousel-dark slide d-sm-block d-md-none ">
            <div class="carousel-indicators mt-5 rounded-5">
                <button type="button" data-bs-target="#carouselForAds" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselForAds" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselForAds" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner px-3 py-3">
                {{-- Corousel Items --}}
                <div class="carousel-item active">
                    <div class="px-2">
                        <div class="container bg-grey-color d-flex justify-content-center align-items-center rounded-4"
                            style="height: 160px">
                            <p>Ads</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="px-2">
                        <div class="container bg-grey-color d-flex justify-content-center align-items-center rounded-4"
                            style="height: 160px">
                            <p>Ads</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="px-2">
                        <div class="container bg-grey-color d-flex justify-content-center align-items-center rounded-4"
                            style="height: 160px">
                            <p>Ads</p>
                        </div>
                    </div>
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
    </div>

    </div>

    <script>
        function filterDropdown(inputId, dropdownId) {
            var input, filter, items, i;
            input = document.getElementById(inputId);
            filter = input.value.toUpperCase();
            items = document.querySelectorAll(dropdownId);
            for (i = 0; i < items.length; i++) {
                txtValue = items[i].textContent || items[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    items[i].style.display = '';
                } else {
                    items[i].style.display = 'none';
                }
            }
        }

        function selectOption(option, dropdownId, buttonId) {
            document.getElementById(buttonId).textContent = option;
            // Tambahan logika atau tindakan lainnya setelah opsi dipilih
        }

        // DatePicker
        $(document).ready(function() {
            $('#datepicker').datepicker({
                format: 'dd MM yy', // Format tanggal
                autoclose: true,
                todayHighlight: true
            });

            // Munculkan datepicker saat tombol trigger diklik
            $('#datepicker-trigger').on('click', function() {
                $('#datepicker').datepicker('show');
            });
        });
        // End

        // FOR COROUSEL
        $(document).ready(function() {
            var slideIndex = 0;
            var touchStartX = 0;
            var touchEndX = 0;

            showSlides();

            function showSlides() {
                var i;
                var slides = $(".carousel-slide");
                var pointersContainer = $(".carousel-pointers");
                pointersContainer.empty();

                for (i = 0; i < slides.length; i++) {
                    var pointer = $("<span class='carousel-pointer'></span>");
                    pointersContainer.append(pointer);

                    slides[i].style.display = "none";
                }

                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }

                slides[slideIndex - 1].style.display = "block";
                $(".carousel-pointer").eq(slideIndex - 1).addClass("active");

                setTimeout(showSlides, 2000); // Change slide every 2 seconds
            }

            $(".carousel-pointer").on("click", function() {
                var index = $(this).index();
                showSlide(index);
            });

            $(".carousel-container").on("touchstart", function(event) {
                touchStartX = event.touches[0].clientX;
            });

            $(".carousel-container").on("touchend", function(event) {
                touchEndX = event.changedTouches[0].clientX;
                handleSwipe();
            });

            function handleSwipe() {
                var threshold = 50; // Minimum distance for a swipe to be recognized

                if (touchEndX < touchStartX - threshold) {
                    // Swipe left
                    showSlide(slideIndex);
                } else if (touchEndX > touchStartX + threshold) {
                    // Swipe right
                    showSlide(slideIndex - 2);
                }
            }

            function showSlide(index) {
                var slides = $(".carousel-slide");
                var pointers = $(".carousel-pointer");

                if (index >= slides.length) {
                    slideIndex = 0;
                } else if (index < 0) {
                    slideIndex = slides.length - 1;
                } else {
                    slideIndex = index;
                }

                slides.hide();
                slides.eq(slideIndex).show();

                pointers.removeClass("active");
                pointers.eq(slideIndex).addClass("active");
            }
        });
        // end
    </script>

    <!-- /.container-fluid -->
@endsection
