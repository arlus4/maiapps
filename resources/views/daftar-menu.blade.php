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
                        Daftar Menu MaiTea
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
                                    <a href="{{ route('varianMenu', ['3']) }}" class="text-decoration-none text-dark">
                                        <div class="css-prodnxk">
                                            <div class="css-prodimga">
                                                <div class="css-abk2bsa" style="width: 130px; height: 130px; border-radius: 8px;">
                                                    <div style="padding-bottom: 100%;"></div>
                                                    <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/teh_1.png');"></div>
                                                </div>
                                            </div>
                                            <div class="css-prinfo1n">
                                                <h4 class="css-nameprod">MaiTea Nusantara Leci</h4>
                                                <h5 class="css-nameinfop">MaiTea Leci nuansa Jepang dengan sensasi creamy</h5>
                                                <h4 class="css-propric">
                                                    <div class="css-prodnormal fw-bold">
                                                        <span>Rp 30.000</span>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="css-prodnxk text-dark">
                                        <div class="css-prodimga">
                                            <div class="css-abk2bsa" style="width: 130px; height: 130px; border-radius: 8px;">
                                                <div style="padding-bottom: 100%;"></div>
                                                <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/teh_2.png');"></div>
                                            </div>
                                        </div>
                                        <div class="css-prinfo1n">
                                            <h4 class="css-nameprod">MaiTea Nusantara Taro</h4>
                                            <h5 class="css-nameinfop">MaiTea Taro nuansa Jepang dengan sensasi creamy</h5>
                                            <h4 class="css-propric">
                                                <div class="css-prodnormal fw-bold">
                                                    <span>Rp 30.000</span>
                                                </div>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="css-prodnxk text-dark">
                                        <div class="css-prodimga">
                                            <div class="css-abk2bsa" style="width: 130px; height: 130px; border-radius: 8px;">
                                                <div style="padding-bottom: 100%;"></div>
                                                <div class="css-q1image css-abfull" style="background-size: cover; background-position: 50% 50%; background-image: url('../assets/images/teh_6.png');"></div>
                                            </div>
                                        </div>
                                        <div class="css-prinfo1n">
                                            <h4 class="css-nameprod">MaiTea Nusantara Matcha</h4>
                                            <h5 class="css-nameinfop">MaiTea Matcha nuansa Jepang dengan sensasi creamy</h5>
                                            <h4 class="css-propric">
                                                <div class="css-prodnormal fw-bold">
                                                    <span>Rp 30.000</span>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>