<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

        <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        <div id="bgAll">
            <div class="app-container">
                <header class="d-flex justify-content-between align-items-center px-4 py-3">
                    <i class="fas fa-bell css-icon"></i>
                    <h1 class="css-bfia2s text-white mb-0">MAIAPPS</h1>
                    <i class="fas fa-bars css-icon"></i>
                </header>

                <div class="px-4 py-1 mb-3">
                    <div class="user-greeting text-white mt-2">
                        <p class="css-cnf2kns mb-0">Selamat Datang,</p>
                        <div class="d-flex align-items-center">
                            <h4 class="mb-0" style="font-size: 1.25rem;">{{ $getData->username }}</h4>
                            <div class="ms-2 me-2">-</div>
                            <h4 class="mb-0" style="font-size: 1.25rem;">{{ $getData->no_hp }}</h4>
                            <!-- <img class="css-fvjk2bks" src="{{ asset('assets/images/c3.png') }}"> -->
                        </div>
                    </div>
                    <div class="swiper mySwiper mt-3">
                        <div class="swiper-wrapper">
                            @foreach($getUserBanner as $getBanner)
                                <div class="css-nxank2n swiper-slide">
                                    <a style="cursor: pointer;" onclick="detailBanner('{{ $getBanner->banner_code }}')">
                                        <img src="https://order.tokoseru.com/storage/banner/image/{{ $getBanner->image_name }}" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="text-decoration-none text-dark" href="{{ route('tukarPoin') }}">
                        <div class="css-fj2ksxjn align-items-center">
                            <div class="ps-3">
                                <img class="img-fluid" src="{{ asset('assets/images/kado.png') }}">
                            </div>
                            <div class="ms-3">
                                <h4 style="font-size: 15px; font-weight: bold;margin-bottom: 4px;color: #00a869;">Tukar Poin</h4>
                                <h5 style="font-size: 13px;" class="mb-0">Klik disini untuk menukar poin</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="css-nck2ksj px-4 py-3">
                    <div class="d-flex row mb-4">
                        <div class="col-md-6 w-50" style="border-right: 1px solid #D6DFEB">
                            <h5 class="css-cnk10ks">Total MaiTea</h5>
                            <p class="css-fnk2nsa">{{ $getUserTotalCup->qty }} <sup>Cup</sup></p>
                        </div>
                        <div class="col-md-6 w-50" style="padding-left: 30px;">
                            <h5 class="css-cnk10ks">Total Poin Saat Ini</h5>
                            <p class="css-fnk2nsa">{{ $getUserPoint->reward }}</p>
                        </div>
                    </div>
                    <div class="row" style="--bs-gutter-x: 0">
                        <div class="col-md-6 w-50">
                            <a class="text-decoration-none" href="{{ route('bonusMaitea') }}">
                                <div class="css-vm2nsoa">
                                    <img src="{{ asset('assets/images/icon_1.png') }}">
                                    <span class="css-fbk8dna">Bonus MaiTea</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 w-50">
                            <a class="text-decoration-none" href="{{ route('riwayatTransaksi') }}">
                                <div class="css-vm2nsoa" style="margin: 8px 0px 0 0;">
                                    <img src="{{ asset('assets/images/icon_2.png') }}">
                                    <span class="css-fbk8dna">Riwayat Transaksi</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 w-50">
                            <a class="text-decoration-none" href="{{ route('geraiMaitea') }}">
                                <div class="css-vm2nsoa">
                                    <img src="{{ asset('assets/images/icon_3.png') }}">
                                    <span class="css-fbk8dna">Gerai MaiTea</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 w-50">
                            <a class="text-decoration-none" href="{{ route('daftarMenu') }}">
                                <div class="css-vm2nsoa" style="margin: 8px 0px 0 0;">
                                    <img src="{{ asset('assets/images/icon_4.png') }}">
                                    <span class="css-fbk8dna">Daftar Menu</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-5 mb-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="css-h4nxakl">Berita untuk Anda</h4>
                            <p class="css-jf8kw2j"><u>Lainnya</u></p>
                        </div>
                        <div class="css-dnxjart mt-3">
                            @foreach($getTopArticle as $topArticle)
                                <a class="text-decoration-none text-dark" href="{{ route('detailArtikel') }}">
                                    <div class="css-cj2kjfl">
                                        <div class="css-dnxjart">
                                            @if($topArticle->image_name == null)
                                                <img class="rounded" height="58px;" src="{{ asset('assets/images/bg_null.png') }}">
                                            @else
                                                <img class="rounded" height="58px;" src="https://order.tokoseru.com/storage/artikel/content/{{ $topArticle->image_name }}">
                                            @endif
                                        </div>
                                        <div class="css-dnxjart">
                                            <div class="css-nfcpo2a" style="-webkit-line-clamp: 1;">{{ $topArticle->headline }}</div>
                                            <div class="css-bn3jkdl" style="-webkit-line-clamp: 2;margin-top: 5px;">
                                                {{ $topArticle->caption }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <!-- <div class="css-cj2kjfl">
                                <div class="css-dnxjart">
                                    <img class="rounded" height="58px;" src="{{ asset('assets/images/bg_teh_2.png') }}">
                                </div>
                                <div class="css-dnxjart">
                                    <div class="css-nfcpo2a" style="-webkit-line-clamp: 1;">British Tea Culture, Bukti Kecintaan Orang Inggris pada Teh</div>
                                    <div class="css-bn3jkdl" style="-webkit-line-clamp: 2;margin-top: 5px;">
                                        Budaya minum teh di Inggris memiliki sejarah yang panjang. Minum teh dianggap sebagai bagian penting dari identitas budaya mereka. Budaya teh Inggris adalah kumpulan tradisi, adat istiadat, dan 
                                        etiket minum teh Inggris. Termasuk cara menyajikan teh, waktu dan kesempatan minum teh, jenis teh yang biasa digunakan, serta cara menyajikan teh dengan sopan. Inggris mempunyai budaya teh yang 
                                        kaya dan telah menjadi bagian integral dari identitas budayanya selama berabad-abad.
                                    </div>
                                </div>
                            </div>
                            <div class="css-cj2kjfl">
                                <div class="css-dnxjart">
                                    <img class="rounded" height="58px;" src="{{ asset('assets/images/bg_teh_3.png') }}">
                                </div>
                                <div class="css-dnxjart">
                                    <div class="css-nfcpo2a" style="-webkit-line-clamp: 1;">Bolehkah Teh Dihangatkan Kembali?</div>
                                    <div class="css-bn3jkdl" style="-webkit-line-clamp: 2;margin-top: 5px;">
                                    Jangan pernah memanaskan kembali sisa teh tadi malam karena sangat berbahaya bagi kesehatan Anda. Jika Anda ingin menikmati secangkir teh hangat, sebaiknya seduh teh baru Anda dalam cangkir atau gelas. 
                                    Selain tetap segar, aroma tehnya juga masih terlihat jelas sehingga membuatnya lebih sehat. Bahkan, terkadang teh yang diminum tadi malam masih menggugah selera di pagi hari. Untuk menambah asyiknya membuat teh, 
                                    terkadang panaskan kembali sisa teh tadi malam di atas kompor atau di microwave. Amankah meminum sisa teh kemarin? Bisakah teh dihangatkan kembali?
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <nav class="css-11e6p2x">
                    <a href="{{ route('beranda') }}" class="css-90nfwk2">
                        <i class="fas fa-home css-8fn2ns0"></i>
                        <span class="css-8h87hbd">Beranda</span>
                    </a>
                    <a href="{{ route('riwayatTransaksi') }}" class="css-90nfwk2">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="css-8h87hbd">Tranksaksi</span>
                    </a>
                    <a href="{{ route('geraiMaitea') }}" class="css-90nfwk2">
                        <i class="fas fa-map-marked-alt"></i>
                        <span class="css-8h87hbd">Gerai MaiTea</span>
                    </a>
                    <a href="{{ route('profil') }}" class="css-90nfwk2">
                        <i class="fas fa-user-circle"></i>
                        <span class="css-8h87hbd">Profil</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Modal Detail Banner -->
        <div class="modal fade w-100" id="detailBanner">
            <div class="modal-dialog css-dn5jdlb">
                <div class="modal-content css-kv2nksik">
                    <div class="modal-header">
                        <h6 id="bannerName"></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="css-cjk3djp" style="border-bottom: 1px solid #fff">
                            <img class="img-fluid rounded" id="imageBanner">
                            <div class="mt-3" id="deskripsiBanner" style="color: #212121;font-size: 14px; font-weight: 400; line-height: 20px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 'auto',
                spaceBetween: 10,
                pagination: {
                    clickable: true,
                },
            });

            function detailBanner(banner_code){
                $.ajax({
                    url: '/detail-banner/' + banner_code,
                    type: "GET",
                    success: function(data) {
                        var urlImage    = 'https://order.tokoseru.com/storage/banner/image/';
                        var imageBanner = data.data[0].image_name;
                        var getImage    = urlImage + imageBanner
                        
                        $('#detailBanner').modal('show');
                        $('#bannerName').text(data.data[0].banner_name);
                        $('#imageBanner').attr('src', getImage);
                        $('#deskripsiBanner').html(data.data[0].description);
                    }
                })
            }
        </script>
    </body>
</html>