<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        <div id="bgAll">
            <div class="css-vbm2ekan">
                <div class="css-hcnk2ns">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="css-kh2hsn swiper-slide">
                                <div class="css-fn2dkna">
                                    <img width="200" style="margin-top: 90px;margin-bottom: 30px" src="{{ asset('assets/images/maitea_nusantara_landing.png') }}">
                                </div>
                                <span class="css-poj2sab">
                                    <h4>
                                        Segarnya Nikmat<br>
                                        Kesetiaan Yang Memikat
                                    </h4>
                                    Selamat Datang Pada Sebuah Terobosan Baru Dalam Es Teh Yang Menyajikan Rasa Memukau Dan Menghargai 
                                    Setiap Tegukan Dengan Program Loyalty Eksklusif Juga Manfaat Istimewa Pada Setiap Keanggotaan Mitra. 
                                    Rasakan Pengalaman Es Teh Yang Tak Tertandingi Dan Jadilah Bagian Dari Revolusi Teh Anak Negeri!.
                                </span>
                            </div>
                            <div class="css-kh2hsn swiper-slide">
                                <div class="css-fn2dkna">
                                    <img width="200" style="margin-top: 60px;margin-bottom: 30px" src="{{ asset('assets/images/bg_2.png') }}">
                                </div>
                                <span class="css-poj2sab">
                                    <h4>Keuntungan Loyalty</h4>
                                    Loyalty Maitea, di mana setiap tegukan membawa Anda lebih dekat ke hadiah istimewa. Loyalitas Anda berharga, dan kami menghargainya dengan berbagai keuntungan eksklusif melalui program loyalty Maitea.
                                </span>
                            </div>
                            <div class="css-kh2hsn swiper-slide">
                                <div class="css-fn2dkna">
                                    <img width="200" style="margin-top: 60px;margin-bottom: 30px" src="{{ asset('assets/images/bg_3.png') }}">
                                </div>
                                <span class="css-poj2sab">
                                    <h4>Gabung Jadi Mitra MaiTea</h4>
                                    Bergabunglah dengan keluarga Maitea, dan wujudkan impian Anda memiliki bisnis dengan Bersama Maitea, jadikan setiap tegukan menjadi kesempatan bisnis yang menguntungkan. Temukan potensi besar franchise kami.
                                </span>
                            </div>
                        </div>
                        <button class="css-fnk3sns btnSelanjutnya border-0">Selanjutnya</button>
                        <button class="border-0 w-100 mt-2" onclick="window.location.href='login'" style="font-weight: 600;background: transparent">Skip</button>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
            });

            document.querySelector('.btnSelanjutnya').addEventListener('click', function() {
                if (swiper.isEnd) {
                    window.location.href = 'login';
                } else {
                    swiper.slideNext();
                }
            });
        </script>
    </body>
</html>