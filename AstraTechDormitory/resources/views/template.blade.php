<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ $title ?? 'Halaman Login' }}</title>

<link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
<link href="{{ asset('assets/Plugins/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/Plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/Content/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ asset('assets/Content/bootstrap-select.min.css') }}" rel="stylesheet">
<!-- ... (tambahkan link CSS lainnya) ... -->

<script src="{{ asset('assets/Scripts/tether/tether.min.js') }}"></script>
<script src="{{ asset('assets/Scripts/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/Scripts/jquery-ui-1.12.1.min.js') }}"></script>
<script src="{{ asset('assets/Plugins/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/Plugins/Highcharts-5.0.14/code/highcharts.js') }}"></script>
<script src="{{ asset('assets/Plugins/Highcharts-5.0.14/code/highcharts-more.js') }}"></script>
<script src="{{ asset('assets/Plugins/Highcharts-5.0.14/code/modules/solid-gauge.js') }}"></script>
<script src="{{ asset('assets/Scripts/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/Scripts/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('assets/Scripts/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/Scripts/LetterAvatar.js') }}"></script>
<!-- ... (tambahkan script JS lainnya) ... -->

    <!-- Tambahkan link CSS lainnya -->

    <!-- Masukkan CDN dan script JS yang diperlukan -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- ... (tambahkan script JS lainnya) ... -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

    <style>
        /* Ganti dengan gaya CSS Anda */<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
        .password-toggle {
            cursor: pointer;
        }

        .input-group .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        body {
            background-image: url('{{ asset("assets/Images/1IMG_Background.jpg") }}'); /* Ganti dengan URL gambar latar belakang yang sesuai */
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* ... (gaya CSS lainnya) ... */
    </style>
</head>

<body>
    <form action="" method="" autocomplete="">
        <div class="polman-form-login">
            <h4>Login Dormitory</h4>
            <hr />
            <img src="{{ asset('assets/Images/logoaja.png') }}" style="height: 300px;" />
            <br /><br /><br />
            <div class="form-group">
                <label for="username">
                    Email
                    <span style="color: red;">*</span>
                </label>
                <input type="text" id="username" name="username" class="form-control" required=""
                       oninvalid="this.setCustomValidity('Username Wajib Diisi')"
                       oninput="this.setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="password">
                    Kata Sandi
                    <span style="color: red;">*</span>
                </label>
                <div class="input-group">
                    <input id="password" type="password" name="password" class="form-control" required
                           oninvalid="this.setCustomValidity('Kata Sandi Wajib Diisi')"

                           oninput="this.setCustomValidity('')">
                    <div class="input-group-append password-toggle">
                        <button class="btn btn-secondary" type="button" onclick="togglePasswordVisibility()">
                            <i class="fa fa-eye" id="show_eye" aria-hidden="true"></i>
                            <i class="fa fa-eye-slash d-none" id="hide_eye" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

            <button id="btnLogin" class="btn btn-primary" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">Masuk</button>
            {{-- <span style="margin-top: 10px;">Anda Mahasiswa Baru? <a href='{{ url("Mahasiswa") }}'>Klik disini</a>.</span> --}}
        </div>
    </form>

    <div class="polman-nav-static-top" style="opacity: 0.9;">
        <div class="float-left">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/Images/logorevisi.png') }}" style="height: 50px;" />
            </a>
        </div>
    </div>

    <div class="mb-5"></div>

    <div class="mt-5" style="background-color: white; width: 100%; position: fixed; left: 0; bottom: 0;">
        <div class="container-fluid">
        </div>
    </div>

    <script type="text/javascript">
        const base_url = '{{ url('/') }}';
    </script>

    <script type="text/javascript">

            function showAlert() {
                $("#username").effect("shake");
                $("#password").effect("shake");
            }

            function showAlertCaptcha() {
                $("#txtCaptcha").effect("shake");
            }

    </script>

    <script>

            function togglePasswordVisibility() {
                const passwordInput = document.getElementById("password");
                const showEye = document.getElementById("show_eye");
                const hideEye = document.getElementById("hide_eye");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    showEye.classList.add("d-none");
                    hideEye.classList.remove("d-none");
                } else {
                    passwordInput.type = "password";
                    showEye.classList.remove("d-none");
                    hideEye.classList.add("d-none");
                }
            }

    </script>
</body>
</html>
