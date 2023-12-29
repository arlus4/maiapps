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
                        Ubah Jenis Kelamin
                    </div>
                </div>
                <div style="padding: 16px;">
                    <form method="post" action="{{ route('storeUbahJenisKelamin') }}" id="formJenisKelamin">
                        @csrf
                        <div class="text-center" style="padding: 17px 16px;">
                            <h3 style="font-size: 1.1rem;color:#212121;font-weight: 600;">Pilih Jenis Kelamin</h3>
                            <p class="css-j23ndwa" style="margin-bottom:20px;">Pastikan Jenis Kelamin Anda diisi dengan benar.</p>
                            <div class="d-flex justify-content-between align-items-center" style="max-width:230px;margin: 0 auto 64px;">
                                <div class="text-center">
                                    <input type="radio" class="cekJK" id="rPria" name="jenis_kelamin" value="P">
                                    <label for="rPria">
                                        <img src="{{ asset('assets/images/ic_male.png') }}" alt="">
                                        <div style="font-weight: 500;margin-top:9px;font-size: 13px; color: #6D7588;">Pria</div>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="radio" class="cekJK" id="rWanita" name="jenis_kelamin" value="W">
                                    <label for="rWanita">
                                        <img src="{{ asset('assets/images/ic_female.png') }}" alt="">
                                        <div style="font-weight: 500;margin-top:9px;font-size: 13px; color: #6D7588;">Wanita</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="selected_jenis_kelamin" id="selectedJenisKelamin" value="pria"> <!-- Input tersembunyi untuk menyimpan nilai jenis kelamin yang dipilih -->
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
                var initialValue = $("input[name='jenis_kelamin']:checked").val();

                function checkInputAndToggleButton() {
                    var selectedValue = $("input[name='jenis_kelamin']:checked").val();

                    var isInputSameAsInitial = selectedValue === initialValue;

                    $("#btnSimpan").prop("disabled", !selectedValue || isInputSameAsInitial)
                        .css({
                            'background-color': (!selectedValue || isInputSameAsInitial) ? '#e2e2e2' : '#039344',
                            'color': (!selectedValue || isInputSameAsInitial) ? '#929292' : '#fff',
                            'cursor': (!selectedValue || isInputSameAsInitial) ? 'not-allowed' : 'pointer'
                        });
                }

                $(".cekJK").on("change", function() {
                    checkInputAndToggleButton();
                });

                // Initial check on page load
                checkInputAndToggleButton();
            });
        </script>
    </body>
</html>