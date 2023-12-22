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
        <div class="app-container bg-white">
            <div class="css-layout">
                <div class="css-arrow">
                    <a href="{{ route('daftarMenu') }}" class="text-dark text-decoration-none">
                        <div class="css-ic-arrow">
                            <i class="fas fa-arrow-left" style="font-size: 20px"></i>
                        </div>
                    </a>
                </div>
                <div class="css-infoxba bg-white">
                    <div class="css-cjk2nso">
                        <div class="w-100 me-0 ms-0 css-bnyu2hjs">
                            <div style="padding-bottom: 100%"></div>
                            <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('https://order.tokoseru.com/{{$getDetailMenu->path_thumbnail}}');"></div>
                        </div>
                    </div>
                    <div class="css-ghj9cma">
                        <h4 class="css-nameprod" style="font-size: 25px;">{{ $getDetailMenu->nama_produk }}</h4>
                        <h4 class="css-propric" style="font-size: 25px;">
                            <div class="css-prodnormal fw-bold">
                                <span>Rp {{ str_replace(',','.',number_format($getDetailMenu->harga)) }}</span>
                            </div>
                        </h4>
                    </div>
                </div>
                <div class="css-cdhjxm">
                    <div>
                        <div style="font-size: 12px;">
                            <div class="css-titxnk2 pb-4">
                                <h4 class="css-nameprod">Deskripsi {{ $getDetailMenu->nama_produk }}</h4>
                                <span>{{ $getDetailMenu->deskripsi }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>