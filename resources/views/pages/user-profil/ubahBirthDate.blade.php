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
                    <a href="{{ route('profilSettings') }}">
                        <div class="header-icon text-white">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                    <div class="header-title text-white">
                        Ubah Tanggal Lahir
                    </div>
                </div>
                <div style="padding: 16px;">
                    <p class="css-j23ndwa">Pastikan Tanggal Lahir Anda diisi dengan benar.</p>
                    <form method="post" action="{{ route('storeUbahBirthDate') }}">
                        @csrf
                        <div style="margin-bottom: 30px;">
                            <div style="padding-top: 9px">
                                <div class="form-group">
                                    <label class="css-45ndkwa">Pilih Tanggal</label>
                                    <input type="date" id="inputDate" name="inputanDate" class="form-control" style="font-size: 13px;" value="{{ $global_user->tanggal_lahir }}">
                                </div>
                            </div>
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
                var initialValue             = $("#inputDate").val().trim();

                function checkInputAndToggleButton() {
                    var inputDate            = $("#inputDate").val().trim();
                    var inputanKosong        = !inputDate;
                    var isInputSameAsInitial = inputDate === initialValue;

                    $("#btnSimpan").prop("disabled", inputanKosong || isInputSameAsInitial);
                    $("#btnSimpan").css({
                        'background-color': (inputanKosong || isInputSameAsInitial) ? '#e2e2e2' : '#039344',
                        'color': (inputanKosong || isInputSameAsInitial) ? '#929292' : '#fff',
                        'cursor': (inputanKosong || isInputSameAsInitial) ? 'not-allowed' : 'pointer'
                    });
                }

                $("#inputDate").on("input", function() {
                    checkInputAndToggleButton();
                });

                $("form").on("submit", function(event) {
                    if ($("#btnSimpan").prop("disabled")) {
                        event.preventDefault();
                    }
                });

                checkInputAndToggleButton();
            });
        </script>
    </body>
</html>