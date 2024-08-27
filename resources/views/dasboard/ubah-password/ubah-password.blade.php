@extends('layout.main')
@section('container')
<!-- Begin Page Content -->

    <!-- start hero -->
    <div class="d-flex flex-column col-md-12">
            <img src="image/Hero_Banner_5.png" class="img-fluid" alt="">
        </div>
    <!-- end hero -->

    <!-- start content -->
    <div class="width-90 mt-5">

        <!-- form -->
        <form action="">
        <h3 class="text-primary-color fw-bold text-center mt-5">Profil Akun</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mt-3 mb-5">
                    <div class="card rounded-3 shadow">
                        <div class="card-body">
                                <div class="form-group has-feedback">
                                    <label for="password1" class="control-label fw-bold xtra-small-font">Masukan Password Sekarang<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-2 ">
                                        <span class="input-group-text bg-grey-color"><i
                                                class="bi bi-lock-fill text-grey-color"></i></span>
                                        <input type="password" class="form-control bg-grey-color"
                                            placeholder="Masukan Password" id="password1" />
                                        <span class="input-group-text bg-grey-color" id="togglePassword1"><i
                                                class="bi bi-eye-slash-fill text-primary-color"></i></span>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password" class="control-label fw-bold xtra-small-font">Password<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-2 ">
                                        <span class="input-group-text bg-grey-color"><i
                                                class="bi bi-lock-fill text-grey-color"></i></span>
                                        <input type="password" class="form-control bg-grey-color"
                                            placeholder="Masukan Password" id="password" />
                                        <span class="input-group-text bg-grey-color" id="togglePassword"><i
                                                class="bi bi-eye-slash-fill text-primary-color"></i></span>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password2" class="control-label fw-bold xtra-small-font">Konfirmasi
                                        Password<span class="text-danger">*</span></label>
                                    <div class="input-group mb-2 ">
                                        <span class="input-group-text bg-grey-color"><i
                                                class="bi bi-lock-fill text-grey-color"></i></span>
                                        <input type="password" class="form-control bg-grey-color"
                                            placeholder="Masukan Ulang Password" id="password2" />
                                        <span class="input-group-text bg-grey-color" id="togglePassword2"><i
                                                class="bi bi-eye-slash-fill text-primary-color"></i></span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- <button class="btn bg-primary-color text-light col-12 fw-bold" type="submit">Masuk</button> -->
                    <a href="login" class="btn bg-primary-color py-3 py-lg-2 text-light col-12 mt-3 fw-bold"
                                type="submit">Ubah Kata Sandi</a>
                </div>
            </div>
        </form>
    </div>


    <script>
            document.getElementById('togglePassword1').addEventListener('click', function () {
                togglePasswordVisibility('password1', 'togglePassword1');
            });

            document.getElementById('togglePassword').addEventListener('click', function () {
                togglePasswordVisibility('password', 'togglePassword');
            });

            document.getElementById('togglePassword2').addEventListener('click', function () {
                togglePasswordVisibility('password2', 'togglePassword2');
            });

            function togglePasswordVisibility(passwordFieldId, toggleButtonId) {
                var passwordInput = document.getElementById(passwordFieldId);
                var icon = document.getElementById(toggleButtonId).querySelector('i');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('bi-eye-slash-fill');
                    icon.classList.add('bi-eye-fill');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('bi-eye-fill');
                    icon.classList.add('bi-eye-slash-fill');
                }
            }
        </script>
    <!-- end content -->
@endsection