<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

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
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Alex Abbad</h2>
                            <img class="css-fvjk2bks" src="{{ asset('assets/images/c3.png') }}">
                        </div>
                    </div>
                    <div class="swiper mySwiper mt-3">
                        <div class="swiper-wrapper">
                            <div class="css-nxank2n swiper-slide">
                                <img src="{{ asset('assets/images/bg_mobile_1.png') }}" alt="">
                            </div>
                            <div class="css-nxank2n swiper-slide">
                                <img src="{{ asset('assets/images/bg_mobile_2.png') }}" alt="">
                            </div>
                            <div class="css-nxank2n swiper-slide">Slide 3</div>
                            <div class="css-nxank2n swiper-slide">Slide 4</div>
                            <div class="css-nxank2n swiper-slide">Slide 5</div>
                            <div class="css-nxank2n swiper-slide">Slide 6</div>
                            <div class="css-nxank2n swiper-slide">Slide 7</div>
                            <div class="css-nxank2n swiper-slide">Slide 8</div>
                            <div class="css-nxank2n swiper-slide">Slide 9</div>
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
                            <p class="css-fnk2nsa">100 <sup>Cup</sup></p>
                        </div>
                        <div class="col-md-6 w-50" style="padding-left: 30px;">
                            <h5 class="css-cnk10ks">Total Poin Saat Ini</h5>
                            <p class="css-fnk2nsa">120</p>
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
                            <a class="text-decoration-none text-dark" href="{{ route('detailArtikel') }}">
                                <div class="css-cj2kjfl">
                                    <div class="css-dnxjart">
                                        <img class="rounded" height="58px;" src="{{ asset('assets/images/bg_teh_1.webp') }}">
                                    </div>
                                    <div class="css-dnxjart">
                                        <div class="css-nfcpo2a" style="-webkit-line-clamp: 1;">Mengenal Jenis dan Manfaat Teh untuk Kesehatan Tubuh</div>
                                        <div class="css-bn3jkdl" style="-webkit-line-clamp: 2;margin-top: 5px;">
                                            Teh adalah minuman yang populer di seluruh dunia. Teh tersedia dalam berbagai jenis seperti teh hijau, 
                                            teh hitam, teh putih, dan teh oolong. Setiap jenis teh memiliki karakteristik dan rasa yang berbeda.
                                            Nah, tak hanya lezat dan menenangkan, nyatanya konsumsi teh juga memiliki beragam manfaat bagi kesehatan. Karena itu, ketahuilah apa saja jenis dan manfaat mengonsumsi teh dalam penjelasan berikut. 
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="css-cj2kjfl">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        </script>
    </body>
</html>