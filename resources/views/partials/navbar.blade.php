<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand mx-2 mx-md-5" href="/"><img src="{{ asset('uploads/' . $konten->logo) }}"
                alt="" width="70"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-primary-color" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary-color" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary-color" href="{{ route('faqs') }}">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary-color" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary-color" href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <a class="text-decoration-none text-primary-color fw-bold px-5 px-md-2 mx-auto mx-md-2"
                        href="{{ route('admin.dashboard') }}">Dashboard</a>
                @else
                    <a class="text-decoration-none text-primary-color fw-bold px-5 px-md-2 mx-auto mx-md-2"
                        href="{{ route('login') }}"></a>
                @endif

                <!-- <a class="btn border-primary-color text-primary-color px-5 px-md-2 mx-auto mx-md-2" href="dashboard">Dashboard</a> -->
            </div>
        </div>
    </div>
</nav>
