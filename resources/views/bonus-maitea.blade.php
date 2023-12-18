<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.bundle.css') }}" type="text/css"/>
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
                        Bonus MaiTea
                    </div>
                </div>
                <div class="css-gh2snka">
                    <div class="css-slk2ndm">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="css-nmv9n1k active" id="targetDaftarPemblian-tab" data-bs-toggle="pill" data-bs-target="#targetDaftarPemblian" type="button" role="tab" aria-controls="targetDaftarPemblian" aria-selected="true">Voucher</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="css-nmv9n1k" id="targetTukarPoin-tab" data-bs-toggle="pill" data-bs-target="#targetTukarPoin" type="button" role="tab" aria-controls="targetTukarPoin" aria-selected="false">Riwayat Voucher</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="targetDaftarPemblian" role="tabpanel" aria-labelledby="targetDaftarPemblian-tab" style="padding: 0px 16px 0px 0px;">
                                <div class="css-bmv3jed mb-4">
                                    <div class="css-fj9jopn">
                                        <b>Bonus MaiTea Regular</b>
                                        <p class="mb-0">
                                            Nikmati bonus MaiTea dan silahkan tukarkan satu cup MaiTea Regular Anda di outlet kesayangan Anda dan 
                                            rasakan kesegaran MaiTea Istimewa secara gratis.
                                        </p>
                                    </div>
                                </div>
                                <div class="css-v2hksop mb-1">
                                    <img class="img-fluid" src="{{ asset('assets/images/voucher_1_tes.png') }}" alt="">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <h4 style="font-size: 13px;">Kode Outlet</h4>
                                            <h4 style="font-size: 13px;">5X8047AA8E3843BS</h4>
                                        </div>
                                        <h4 class="css-propric mb-0" style="font-size: 12px;">
                                            <button type="button" class="border-0 bg-white p-0" data-bs-toggle="modal" data-bs-target="#modalMaps">
                                                <div class="d-flex css-prodnormal align-items-center fw-bold">
                                                    <img width="20" src="{{ asset('assets/images/map.png') }}">
                                                    <span style="margin-left: 8px;font-size: 15px;">Lihat Maps</span>
                                                </div>
                                            </button>
                                        </h4>
                                    </div>
                                </div>
                                <div class="css-v2hksop">
                                    <img class="img-fluid" src="{{ asset('assets/images/voucher_1_tes.png') }}" alt="">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <h4 style="font-size: 13px;">Kode Outlet</h4>
                                            <h4 style="font-size: 13px;">5X8047AA8E3843BS</h4>
                                        </div>
                                        <h4 class="css-propric mb-0" style="font-size: 12px;">
                                            <button type="button" class="border-0 bg-white p-0" data-bs-toggle="modal" data-bs-target="#modalMaps">
                                                <div class="d-flex css-prodnormal align-items-center fw-bold">
                                                    <img width="20" src="{{ asset('assets/images/map.png') }}">
                                                    <span style="margin-left: 8px;font-size: 15px;">Lihat Maps</span>
                                                </div>
                                            </button>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="targetTukarPoin" role="tabpanel" aria-labelledby="targetTukarPoin-tab" style="padding: 0px 16px 0px 0px;">
                                <div class="css-v2hksop">
                                    <div class="css-yuij6na">
                                        <div class="css-vnmjd2j">
                                            <div>
                                                <div class="css-asdertd2">
                                                    <div class="css-hj8kopa">
                                                        <img class="img-fluid" width="24" src="{{ asset('assets/images/riwayat_ic.png') }}">
                                                    </div>
                                                    <div class="css-lkgd2bs">
                                                        <h3 class="css-belihdf2">Riwayat Voucher</h3>
                                                        <h4 class="css-kf3hkdn">Tanggal Claim : 24 September 2023</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 style="font-size: 13px;">Kode Voucher</h4>
                                            <h4 style="font-size: 13px;">123456789</h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 style="font-size: 13px;">Nama Outlet</h4>
                                            <h4 style="font-size: 13px;">MaiTea Villa Indah Bogor 5</h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 style="font-size: 13px;">Kode Outlet</h4>
                                            <h4 style="font-size: 13px;">88888888999999</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-v2hksop">
                                    <div class="css-yuij6na">
                                        <div class="css-vnmjd2j">
                                            <div>
                                                <div class="css-asdertd2">
                                                    <div class="css-hj8kopa">
                                                        <img class="img-fluid" width="24" src="{{ asset('assets/images/riwayat_ic.png') }}">
                                                    </div>
                                                    <div class="css-lkgd2bs">
                                                        <h3 class="css-belihdf2">Riwayat Voucher</h3>
                                                        <h4 class="css-kf3hkdn">Tanggal Claim : 24 September 2023</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 style="font-size: 13px;">Kode Voucher</h4>
                                            <h4 style="font-size: 13px;">123456789</h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 style="font-size: 13px;">Nama Outlet</h4>
                                            <h4 style="font-size: 13px;">MaiTea Villa Indah Bogor 5</h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 style="font-size: 13px;">Kode Outlet</h4>
                                            <h4 style="font-size: 13px;">88888888999999</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Detail -->
        <div class="modal fade w-100" id="modalDetail">
            <div class="modal-dialog css-dn5jdla">
                <div class="modal-content css-kv2nksik">
                    <div class="modal-header">
                        <h6>Detail Transaksi</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="css-cjk3djp">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="font-size: 13px;">Nama Varian</h4>
                                <h4 style="font-size: 13px;">MaiTea Regular</h4>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="font-size: 13px;">Jumlah Cup</h4>
                                <h4 style="font-size: 13px;">20 Cup</h4>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="font-size: 13px;">Harga</h4>
                                <h4 style="font-size: 13px;">Rp 40.000</h4>
                            </div>
                        </div>
                        <div class="css-cjk3djp">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="font-size: 13px;">Nama Varian</h4>
                                <h4 style="font-size: 13px;">MaiTea Regular</h4>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="font-size: 13px;">Jumlah Cup</h4>
                                <h4 style="font-size: 13px;">20 Cup</h4>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="font-size: 13px;">Harga</h4>
                                <h4 style="font-size: 13px;">Rp 40.000</h4>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script>
    </body>
</html>