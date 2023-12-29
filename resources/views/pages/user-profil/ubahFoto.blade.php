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
                        Ubah Foto Profil
                    </div>
                </div>
                <div style="padding: 16px;">
                    <p class="css-j23ndwa">Masukkan Foto Profil Anda dengan benar, agar mudah mengenalinya.</p>
                    <form method="post" action="{{ route('storeUbahFoto') }}" enctype="multipart/form-data">
                        @csrf
                        <div style="margin-bottom: 30px;">
                            <div style="padding-top: 9px">
                                <div class="form-group">
                                    <label class="css-45ndkwa">Unggah Foto Baru</label>
                                    <input type="file" id="inputanFoto" name="inputanFoto" class="form-control" style="font-size: 13px;">
                                    <span class="text-danger" style="font-size: 12px;font-weight: 500;">Pastikan Foto berbentuk : JPG, JPEG, PNG.</span>
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
                var getValueNama      = $("#inputanFoto").val().trim();

                function checkInputAndToggleButton() {
                    var inputValue    = $("#inputanFoto").val().trim();
                    var inputanKosong = !inputValue;

                    var isInputSameAsInitial = inputValue === getValueNama;

                    $("#btnSimpan").prop("disabled", inputanKosong || isInputSameAsInitial)
                        .css({
                            'background-color': (inputanKosong || isInputSameAsInitial) ? '#e2e2e2' : '#039344',
                            'color': (inputanKosong || isInputSameAsInitial) ? '#929292' : '#fff',
                            'cursor': (inputanKosong || isInputSameAsInitial) ? 'not-allowed' : 'pointer'
                        });
                }

                $("#inputanFoto").on("input", function() {
                    checkInputAndToggleButton();
                });
            });
        </script>
    </body>
</html>