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
                        Gerai MaiTea
                    </div>
                </div>
                <div class="appMain" style="padding-top: 15px">
                    <div class="appMainSticky" style="top: 0px;"></div>
                    <div class="mainMenu px-3">
                        <div class="mainMenuAp">
                            <div class="mainMenuSc" style="height: 0px; --q-virtual-scroll-item-height: 120px;"></div>
                            <!-- <div>
                                <img class="img-fluid" style="border-radius: 8px" src="{{ asset('assets/images/oit.jpg') }}" alt="">
                            </div> -->
                            <div class="mainMenuOr">
                                <div class="mainMenuProd">
                                    <!-- <div class="css-nf90ejxd">Varian Menu</div> -->
                                    <a href="#" class="text-decoration-none text-dark">
                                        <div class="css-prodnxk" style="padding: 10px 10px 0 0;height: 130px;">
                                            <div class="css-prodimga" style="height: 120px">
                                                <div class="css-abk2bsa" style="width: 130px; height: 110px; border-radius: 8px;">
                                                    <div style="padding-bottom: 100%;"></div>
                                                    <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/toko_1.jpg');"></div>
                                                </div>
                                            </div>
                                            <div class="css-prinfo1n" style="padding: 0px 0px 12px 17px;">
                                                <h4 class="css-nameprod mb-0" style="font-size: 16px;">MaiTea Kota Wisata</h4>
                                                <h5 class="css-nameinfop" style="font-size: 14px;">Cibubur, Jawa Barat</h5>
                                                <h4 class="css-propric mb-0" style="font-size: 12px;">
                                                    <button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modalMaps">
                                                        <div class="css-prodnormal align-items-center fw-bold">
                                                            <img width="15" src="{{ asset('assets/images/map.png') }}">
                                                            <span>Lihat Maps</span>
                                                        </div>
                                                    </button>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="css-prodnxk text-dark" style="padding: 10px 10px 0 0;height: 130px;">
                                        <div class="css-prodimga" style="height: 120px">
                                            <div class="css-abk2bsa" style="width: 130px; height: 110px; border-radius: 8px;">
                                                <div style="padding-bottom: 100%;"></div>
                                                <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/toko_2.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="css-prinfo1n" style="padding: 0px 0px 12px 17px;">
                                            <h4 class="css-nameprod mb-0" style="font-size: 16px;">MaiTea Villa Indah Bogor 5</h4>
                                            <h5 class="css-nameinfop" style="font-size: 14px;">Bogor, Jawa Barat</h5>
                                            <h4 class="css-propric mb-0" style="font-size: 12px;">
                                                <div class="css-prodnormal align-items-center fw-bold">
                                                    <img width="15" src="{{ asset('assets/images/map.png') }}">
                                                    <span>Lihat Maps</span>
                                                </div>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="css-prodnxk text-dark" style="padding: 10px 10px 0 0;height: 130px;">
                                        <div class="css-prodimga" style="height: 120px">
                                            <div class="css-abk2bsa" style="width: 130px; height: 110px; border-radius: 8px;">
                                                <div style="padding-bottom: 100%;"></div>
                                                <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/toko_3.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="css-prinfo1n" style="padding: 0px 0px 12px 17px;">
                                            <h4 class="css-nameprod mb-0" style="font-size: 16px;">MaiTea RE Martadinata</h4>
                                            <h5 class="css-nameinfop" style="font-size: 14px;">Bandung, Jawa Barat</h5>
                                            <h4 class="css-propric mb-0" style="font-size: 12px;">
                                                <div class="css-prodnormal align-items-center fw-bold">
                                                    <img width="15" src="{{ asset('assets/images/map.png') }}">
                                                    <span>Lihat Maps</span>
                                                </div>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="css-prodnxk text-dark" style="padding: 10px 10px 0 0;height: 130px;">
                                        <div class="css-prodimga" style="height: 120px">
                                            <div class="css-abk2bsa" style="width: 130px; height: 110px; border-radius: 8px;">
                                                <div style="padding-bottom: 100%;"></div>
                                                <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/toko_4.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="css-prinfo1n" style="padding: 0px 0px 12px 17px;">
                                            <h4 class="css-nameprod mb-0" style="font-size: 16px;">MaiTea Surabaya</h4>
                                            <h5 class="css-nameinfop" style="font-size: 14px;">Surabaya, Jawa Timur</h5>
                                            <h4 class="css-propric mb-0" style="font-size: 12px;">
                                                <div class="css-prodnormal align-items-center fw-bold">
                                                    <img width="15" src="{{ asset('assets/images/map.png') }}">
                                                    <span>Lihat Maps</span>
                                                </div>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div></div> -->
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8514633864415!2d106.80716127469948!3d-6.540434293452426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3f8fb2630fd%3A0xcb1b7665b4cbddd6!2sJl.%20Villa%20Bogor%20Indah%205%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1702010812027!5m2!1sid!2sid" style="height: -webkit-fill-available;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>