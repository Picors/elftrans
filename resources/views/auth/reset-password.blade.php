<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link rel="icon" href="{{ asset('uploads/' . $konten->icon) }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="vh-100 d-flex align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6 col-md-6 d-none d-sm-block d-md-block position-relative"
                style="background-image: url({{ asset('image/login1.png') }}); background-size: cover; background-repeat: no-repeat;">
                <img src="{{ asset('image/Text.png') }}" alt="" width="80%" class="pt-5 mx-auto d-block">
                <img src="{{ asset('image/Wave1.png') }}" class="position-absolute bottom-0 start-0" alt=""
                    width="45%" height="40%">
            </div>
            <div
                class="col-12 col-md-6 col-lg-6 py-4 px-2 bg-grey-light-color d-flex align-items-center justify-content-center">
                <img src="{{ asset('image/Wave.png') }}" alt="Wave" class="wave-image position-absolute top-0 end-0"
                    style="width: 100px; height: auto;">
                <form action="{{ route('password.update') }}" method="POST"
                    class="d-flex flex-column align-items-center w-100">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <img src="{{ asset('uploads/' . $konten->logo) }}" alt="" width="100"><br>
                    <h5 class="text-primary-color text-center fw-bold">Reset Password Anda</h5>
                    <div class="card shadow col-11 col-lg-10 col-md-10 bg-grey-light-color">
                        <div class="card-body rounded-3">
                            <div class="form-group has-feedback">
                                <label for="email" class="control-label fw-bold xtra-small-font">Email<span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text bg-grey-color"><i
                                            class="bi bi-envelope-fill text-grey-color"></i></span>
                                    <input type="email" class="form-control bg-grey-color"
                                        placeholder="Masukkan Email Anda" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="password" class="control-label fw-bold xtra-small-font">Password Baru<span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text bg-grey-color"><i
                                            class="bi bi-lock-fill text-grey-color"></i></span>
                                    <input type="password" class="form-control bg-grey-color"
                                        placeholder="Masukkan Password Baru" name="password" id="password" required>
                                    <span class="input-group-text bg-grey-color" id="togglePassword"><i
                                            class="bi bi-eye-slash-fill text-primary-color"></i></span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="password_confirmation"
                                    class="control-label fw-bold xtra-small-font">Konfirmasi Password<span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text bg-grey-color"><i
                                            class="bi bi-lock-fill text-grey-color"></i></span>
                                    <input type="password" class="form-control bg-grey-color"
                                        placeholder="Konfirmasi Password Baru" name="password_confirmation"
                                        id="password_confirmation" required>
                                    <span class="input-group-text bg-grey-color" id="togglePassword"><i
                                            class="bi bi-eye-slash-fill text-primary-color"></i></span>
                                </div>
                            </div>
                            <div class="col-11 col-lg-10 col-md-10 mt-3">
                                <button class="btn bg-primary-color py-3 py-lg-2 text-light col-12 fw-bold"
                                    type="submit">Reset Password</button>
                            </div>
                            <p class="mt-3">Ingat Password? <a href="{{ route('login') }}"
                                    class="border-primary-color py-1 px-1 rounded-3 text-decoration-none">Masuk</a></p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            const icon = this.querySelector('i');

            if (password.type === 'password') {
                password.type = 'text';
                passwordConfirmation.type = 'text';
                icon.classList.remove('bi-eye-slash-fill');
                icon.classList.add('bi-eye-fill');
            } else {
                password.type = 'password';
                passwordConfirmation.type = 'password';
                icon.classList.remove('bi-eye-fill');
                icon.classList.add('bi-eye-slash-fill');
            }
        });
    </script>
</body>

</html>
