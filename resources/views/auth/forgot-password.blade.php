<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Password</title>
    <link rel="icon" href="{{ asset('uploads/' . $konten->icon) }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="vh-100 align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6 col-md-6 d-none d-sm-block d-md-block position-relative"
                style="background-image: url({{ asset('image/login1.png') }}); background-size: 100% 100%; background-repeat: no-repeat;width:50%;">
                <img src="{{ asset('image/Text.png') }}" alt="" width="80%" class="pt-5 mx-auto d-block">
                <img src="{{ asset('image/Wave1.png') }}" class="position-absolute bottom-0 start-0" alt=""
                    width="45%" height="40%">
            </div>
            <div
                class="col-12 col-md-6 col-lg-6 py-4 px-2 bg-grey-light-color position-relative d-flex align-items-center">
                <img src="{{ asset('image/Wave.png') }}" alt="Wave" class="wave-image position-absolute top-0 end-0"
                    style="width: 100px; height: auto;">
                <form action="{{ route('password.email') }}" method="POST"
                    class="d-flex flex-column align-items-center w-100">
                    @csrf
                    <img src="{{ asset('uploads/' . $konten->logo) }}" alt="" width="100"><br>
                    <h5 class="text-primary-color text-center fw-bold">Lupa Password Anda?</h5>
                    <p class="text-center text-dark-blue-color">Masukkan email Anda untuk menerima tautan reset
                        password.</p>
                    <div class="card shadow col-11 col-lg-10 col-md-10 bg-grey-light-color">
                        <div class="card-body rounded-3">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group has-feedback">
                                <label for="email" class="control-label fw-bold xtra-small-font">Email<span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-2 ">
                                    <span class="input-group-text bg-grey-color"><i
                                            class="bi bi-envelope-fill text-grey-color"></i></span>
                                    <input type="email" class="form-control bg-grey-color"
                                        placeholder="Masukkan Email" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-lg-10 col-md-10 mt-3">
                        <button class="btn bg-primary-color py-3 py-lg-2 text-light col-12 fw-bold" type="submit">Kirim
                            Tautan Reset Password</button>
                    </div>
                    <p class="mt-3">Ingat Password? <a href="{{ route('login') }}"
                            class="border-primary-color py-1 px-1 rounded-3 text-decoration-none">Masuk</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
