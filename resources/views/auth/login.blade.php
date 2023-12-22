<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        <div id="bgAll">
            <div class="css-vbm2ekan">
                <div class="css-hcnk2ns">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yeaayy, </strong> {{ $message }} {{ Auth::user()->username }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oopss,</strong> {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="css-fn2dkna">
                        <img width="250" style="margin-top: 220px;margin-bottom:105px" src="{{ asset('assets/images/maitea_nusantara_landing.png') }}">
                    </div>
                    <button type="button" class="css-fnk3sns border-0" data-bs-toggle="modal" data-bs-target="#modalMasuk">Masuk</button>
                    <button class="css-fnk3snsa mt-3" onclick="window.location.href='register'">Daftar</button>
                </div>
                <div class="mt-3 text-center">
                    <span>Butuh bantuan lebih lanjut? <u style="color: #00a869; font-weight: 600;">klik disini</u></span>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalMasuk">
            <div class="modal-dialog css-dn5jdla" style="height: 55vh;">
                <div class="modal-content css-kv2nksik">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-size: 18px;font-family: montserrat; font-weight: bold;" id="exampleModalLabel">MaiApps Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-3">
                        <form action="{{ route('loginUser') }}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label>No Telpon</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <p style="text-align: right;color: #00a869;">Lupa Password?</p>
                            <button type="submit" class="btn css-fnk3sns text-white mt-4">Masuk</button>
                        </form>
                        <p class="text-center mt-3">Belum punya akun? <u onclick="window.location.href='register'" style="color: #00a869;">Daftar</u></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>