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
        <div id="headerDaftar" class="headerDaftar">
            <div class="app-container bg-white">
                <div class="css-kl2jsna px-3">
                    <a href="{{ route('beranda') }}">
                        <div class="header-icon text-white">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                    <div class="header-title text-white">
                        Gerai MaiTea Nusantara
                    </div>
                </div>
                <div class="appMain" style="padding-top: 15px">
                    <div class="appMainSticky" style="top: 0px;"></div>
                    <div class="mainMenu px-3">
                        <div class="mainMenuAp">
                            <div class="mainMenuSc" style="height: 0px; --q-virtual-scroll-item-height: 120px;"></div>
                            <!-- ini buat banner jika butuh
                            <div>
                                <img class="img-fluid" style="border-radius: 8px" src="{{ asset('assets/images/oit.jpg') }}" alt="">
                            </div> -->
                            <div class="mainMenuOr">
                                <div class="mainMenuProd">
                                    @foreach($getGeraiMaiTea as $geraiMaitea)
                                        <a href="#" class="text-decoration-none text-dark">
                                            <div class="css-prodnxk" style="padding: 10px 10px 0 0;height: 130px;">
                                                <div class="css-prodimga" style="height: 120px">
                                                    <div class="css-abk2bsa" style="width: 130px; height: 110px; border-radius: 8px;">
                                                        <div style="padding-bottom: 100%;"></div>
                                                        <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/toko_1.jpg');"></div>
                                                    </div>
                                                </div>
                                                <div class="css-prinfo1n" style="padding: 0px 0px 12px 17px;">
                                                    <h4 class="css-nameprod mb-0" style="font-size: 16px;">{{ $geraiMaitea->nama_outlet }}</h4>
                                                    <h5 class="css-nameinfop" style="font-size: 14px;">{{ $geraiMaitea->area }}</h5>
                                                    <h4 class="css-propric mb-0" style="font-size: 12px;">
                                                        <button type="button" class="border-0 bg-white" onclick="lihatMaps('{{ $geraiMaitea->outlet_id }}')">
                                                            <div class="css-prodnormal align-items-center fw-bold">
                                                                <img width="15" src="{{ asset('assets/images/map.png') }}">
                                                                <span>Lihat Maps</span>
                                                            </div>
                                                        </button>
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Maps -->
        <div class="modal fade" id="modalMaps">
            <div class="modal-dialog css-ndkf2nsk">
                <div class="modal-content css-pof2nks">
                    <div class="modal-header">
                        <h5 style="font-size: 20px;" id="alamatDetail"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="mapLocation" class="w-100" style="height: -webkit-fill-available; border: 0;"></div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            function lihatMaps(outlet_id){
                $.ajax({
                    url: '/lihat-maps/' + outlet_id,
                    type: "GET",
                    success: function(data) {
                        var embedUrl = data.data[0].map_location;
                        
                        $('#modalMaps').modal('show');
                        $('#alamatDetail').text(data.data[0].alamat_detail);
                        $('#mapLocation').html('<iframe class="w-100" src="' + embedUrl + '" style="height: -webkit-fill-available;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>');
                    }
                });
            }
        </script>
    </body>
</html>