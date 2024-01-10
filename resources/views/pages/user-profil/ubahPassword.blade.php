<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.bundle.css') }}" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        <div id="headerDaftar" class="headerDaftar">
            <div class="app-container bg-white">
                <div class="css-kl2jsna px-3">
                    <a href="{{ route('profil') }}">
                        <div class="header-icon text-white">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                    <div class="header-title text-white">
                        Ubah Password
                    </div>
                </div>
                <div style="padding: 16px;">
                    <p class="css-j23ndwa">Masukkan Password Anda dengan benar, agar keamanan akun tetap terjaga.</p>
                    <form method="post" action="{{ route('storeUbahPassword') }}">
                        @csrf
                        <div style="margin-bottom: 30px;">
                            <div style="padding-top: 9px">
                                <div class="form-group mb-3">
                                    <label class="css-45ndkwa">Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" id="inputPassword" name="inputanPassword" class="form-control" style="font-size: 13px;" placeholder="Masukkan Password Baru">
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="border-radius: 0px .25rem .25rem 0px;height: 33px!important;" onclick="togglePassword('inputPassword', 'eyeIconPassword')">
                                                <i id="eyeIconPassword" class="fas fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="css-45ndkwa">Konfirmasi Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" id="inputKonfirmasiPassword" name="inputanKonfirmasiPassword" class="form-control" style="font-size: 13px;" placeholder="Masukkan Konfirmasi Password Baru">
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="border-radius: 0px .25rem .25rem 0px;height: 33px!important;" onclick="togglePassword('inputKonfirmasiPassword', 'eyeIconKonfirmasiPassword')">
                                                <i id="eyeIconKonfirmasiPassword" class="fas fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger" id="errorPassword" style="font-size: 12px;font-weight: 500;"></span>
                        </div>
                        <button type="submit" id="btnSimpan" class="css-btn2enk border-0" style="background-color: #e2e2e2;color: #929292;cursor: not-allowed;">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script>
        <script>
            $(document).ready(function() {
                var initialValuePassword            = $("#inputPassword").val().trim();
                var initialValueKonfirmasiPassword  = $("#inputKonfirmasiPassword").val().trim();

                function checkInputAndToggleButton() {
                    var inputPassword                       = $("#inputPassword").val().trim();
                    var inputKonfirmasiPassword             = $("#inputKonfirmasiPassword").val().trim();

                    var isPasswordKosong                    = !inputPassword;
                    var isPasswordSameAsInitial             = inputPassword === initialValuePassword;

                    var isKonfirmasiPasswordKosong          = !inputKonfirmasiPassword;
                    var isKonfirmasiPasswordSameAsInitial   = inputKonfirmasiPassword === initialValueKonfirmasiPassword;

                    if (isPasswordKosong || isPasswordSameAsInitial || isKonfirmasiPasswordKosong || isKonfirmasiPasswordSameAsInitial) {
                        $("#btnSimpan").prop("disabled", true);
                        $("#errorPassword").text(""); // Reset pesan error
                    } else {
                        // Jika password dan konfirmasi password tidak sama, tampilkan pesan error
                        if (inputPassword !== inputKonfirmasiPassword) {
                            $("#btnSimpan").prop("disabled", true);
                            $("#errorPassword").text("Password dan Konfirmasi Password tidak sama");
                        } else {
                            $("#btnSimpan").prop("disabled", false);
                            $("#errorPassword").text(""); // Reset pesan error jika password cocok
                        }
                    }

                    $("#btnSimpan").css({
                        'background-color': ($("#btnSimpan").prop("disabled")) ? '#e2e2e2' : '#039344',
                        'color': ($("#btnSimpan").prop("disabled")) ? '#929292' : '#fff',
                        'cursor': ($("#btnSimpan").prop("disabled")) ? 'not-allowed' : 'pointer'
                    });
                }

                $("#inputPassword, #inputKonfirmasiPassword").on("input", function() {
                    checkInputAndToggleButton();
                });

                $("form").on("submit", function(event) {
                    if ($("#btnSimpan").prop("disabled")) {
                        event.preventDefault();
                    }
                });

                checkInputAndToggleButton();
            });

            function togglePassword(inputId, iconId) {
                var inputElement = $("#" + inputId);
                var iconElement = $("#" + iconId);

                if (inputElement.attr("type") === "password") {
                    inputElement.attr("type", "text");
                    iconElement.removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    inputElement.attr("type", "password");
                    iconElement.removeClass("fa-eye-slash").addClass("fa-eye");
                }
            }
        </script>
    </body>
</html>