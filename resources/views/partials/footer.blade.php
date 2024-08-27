<div style="background-color: rgba(2, 75, 127, 1)">
    <footer class="d-md-flex justify-content-center flex-wrap py-5" style="width: 90%; margin: 0 auto">

        {{-- content --}}
        <div class="col-md-4 pe-1 mt-3">
            <p class="text-light"><img src="{{ asset('uploads/' . $konten->logo) }}" alt="" width="70"></p>
            <p class="text-light">{{ $konten->teks_footer }}</p>

            {{-- Social media --}}
            <div class="d-flex">
                <a href="{{ $konten->link_facebook }}">
                    <i class="bi bi-facebook text-light" style="font-size: 32px"></i>
                </a>
                <a href="{{ $konten->link_instagram }}">
                    <i class="bi bi-instagram text-light mx-3" style="font-size: 32px"></i>
                </a>
                <a href="{{ $konten->link_tiktok }}">
                    <i class="bi bi-tiktok text-light" style="font-size: 32px"></i>
                </a>
            </div>
        </div>

        <div class="col-md-4 px-1 mt-3">
            <h5 class="text-light">Perusahaan</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <i class="bi bi-chevron-right text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none" href="tentang-kami">Tentang
                            Kami</a></i>
                </li>
                <li class="nav-item mb-2">
                    <i class="bi bi-chevron-right text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none" href="faqs">FAQs</a></i>
                </li>
                <li class="nav-item mb-2">
                    <i class="bi bi-chevron-right text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none" href="blog">Blog</a></i>
                </li>
                <li class="nav-item mb-2">
                    <i class="bi bi-chevron-right text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none"
                            href="kontak">Kontak</a></i>
                </li>
            </ul>
        </div>

        <div class="col-md-4 px-1 mt-3">
            <h5 class="text-light">Info Kontak</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <i class="bi bi-telephone-fill text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none"
                            href="{{ $konten->link_whatsapp }}">{{ $konten->link_whatsapp }}</a></i>
                </li>
                <li class="nav-item mb-2">
                    <i class="bi bi-geo-alt-fill text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none"
                            href="">{{ $konten->alamat }}</a></i>
                </li>
                <li class="nav-item mb-2">
                    <i class="bi bi-envelope-fill text-light"><a
                            class="text-primary-color fst-normal ps-2 text-decoration-none"
                            href="">{{ $konten->email }}</a></i>
                </li>
            </ul>
        </div>

    </footer>
</div>
