<!-- View Template Login -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - {{ $konten->nama_web }}</title>
    <link rel="icon" href="{{ asset('uploads/' . $konten->icon) }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="vh-100 align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6 col-md-6 d-none d-sm-block d-md-block position-relative"
                style="background-image: url(image/login1.png); background-size: 100% 100%; background-repeat: no-repeat;width:50%;">
                <img src="image/Text.png" alt="" width="80%" class="pt-5 mx-auto d-block">
                <img src="image/Wave1.png" class="position-absolute bottom-0 start-0" alt="" width="45%"
                    height="40%">
            </div>
            <div
                class="col-12 col-md-6 col-lg-6 py-4 px-2 bg-grey-light-color position-relative d-flex align-items-center">

                <img src="image/Wave.png" alt="Wave" class="wave-image position-absolute top-0 end-0"
                    style="width: 100px; height: auto;">

                <!-- form login -->
                <!-- Form login yang benar -->
                <form action="{{ route('login') }}" method="POST" class="d-flex flex-column align-items-center w-100">
                    @csrf
                    <img src="{{ asset('uploads/' . $konten->logo) }}" alt="" width="100"><br>
                    <h5 class="text-primary-color text-center fw-bold">Selamat Datang di {{ $konten->nama_web }}</h5>
                    <p class="text-center text-dark-blue-color">{{ $konten->nama_web }} Information</p>

                    <!-- Tampilkan pesan error -->
                    @if (session('error'))
                        <div class="alert alert-danger col-11 col-lg-10 col-md-10">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card shadow col-11 col-lg-10 col-md-10 bg-grey-light-color">
                        <div class="card-body rounded-3">
                            <h5 class="fw-bold">Masuk Akun</h5>
                            <div class="form-group has-feedback">
                                <label for="username" class="control-label fw-bold xtra-small-font">Username<span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text bg-grey-color"><i
                                            class="bi bi-person-fill text-grey-color"></i></span>
                                    <input type="text" name="username" class="form-control bg-grey-color"
                                        placeholder="Masukan Username" id="username" />
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="password" class="control-label fw-bold xtra-small-font">Password<span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text bg-grey-color"><i
                                            class="bi bi-lock-fill text-grey-color"></i></span>
                                    <input type="password" name="password" class="form-control bg-grey-color"
                                        placeholder="Masukan Password" id="password" />
                                    <span class="input-group-text bg-grey-color" id="togglePassword"><i
                                            class="bi bi-eye-slash-fill text-primary-color"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-lg-10 col-md-10 d-flex justify-content-between mt-3">
                        <div class="form-check">
                            <input class="form-check-input border-blue-color" type="checkbox" name="remember"
                                value="" id="remember">
                            <label class="small-font">Ingat Saya</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-decoration-none">Lupa Password?</a>
                    </div>
                    <div class="col-11 col-lg-10 col-md-10 mt-3">
                        <button type="submit"
                            class="btn bg-primary-color py-3 py-lg-2 text-light col-12 fw-bold">Masuk</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>

    <!-- cdn script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var icon = document.getElementById('togglePassword').querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('bi-eye-slash-fill');
                icon.classList.add('bi-eye-fill');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('bi-eye-fill');
                icon.classList.add('bi-eye-slash-fill');
            }
        });
    </script>
</body>

</html>
