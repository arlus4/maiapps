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
                        Riwayat Transaksi
                    </div>
                </div>
                <div class="css-gh2snka">
                    <div class="css-slk2ndm">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="css-nmv9n1k active" id="targetDaftarPemblian-tab" data-bs-toggle="pill" data-bs-target="#targetDaftarPemblian" type="button" role="tab" aria-controls="targetDaftarPemblian" aria-selected="true">Daftar Pembelian</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="css-nmv9n1k" id="targetTukarPoin-tab" data-bs-toggle="pill" data-bs-target="#targetTukarPoin" type="button" role="tab" aria-controls="targetTukarPoin" aria-selected="false">Tukar Poin</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="targetDaftarPemblian" role="tabpanel" aria-labelledby="targetDaftarPemblian-tab" style="padding: 0px 16px 0px 0px;">
                                <h5 style="font-size: 15px;">Total MaiTea saat ini</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold" style="font-size: 18px;">100 Cup</div>
                                    <div class="fw-bold" style="font-size: 18px;">Rp 10.000.000</div>
                                </div>
                                <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="css-nmv9n1k w-50">
                                        <select type="date" name="" id="" class="form-control border-0" style="font-size: 13px!important;">
                                            <option>Pilih Tahun</option>
                                            @php
                                                $currentYear = now()->year;
                                            @endphp

                                            @for ($year = 2010; $year <= $currentYear + 3; $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="css-nmv9n1k w-50">
                                        <select type="date" name="" class="form-control border-0" style="font-size: 13px!important;">
                                            <option>Pilih Bulan</option>
                                            <option value="">Januari</option>
                                            <option value="">Februari</option>
                                            <option value="">Maret</option>
                                            <option value="">April</option>
                                            <option value="">Mei</option>
                                            <option value="">Juni</option>
                                            <option value="">Juli</option>
                                            <option value="">Agustus</option>
                                            <option value="">Oktober</option>
                                            <option value="">November</option>
                                            <option value="">Desember</option>
                                        </select>
                                    </div>
                                    <div class="css-fnk3sns text-center mt-0 w-25" style="font-size: 13px;border-radius:12px; padding: 6px;height: 32px;">Cari</div>
                                </div>
                                <div class="css-jf8nd2k">
                                    <section class="css-v2hksop">
                                        <div class="css-yuij6na">
                                            <div class="css-vnmjd2j">
                                                <div>
                                                    <div class="css-asdertd2">
                                                        <div class="css-hj8kopa">
                                                            <img class="img-fluid" width="24" src="{{ asset('assets/images/pembelian.png') }}">
                                                        </div>
                                                        <div class="css-lkgd2bs">
                                                            <h3 class="css-belihdf2">Pembelian MaiTea</h3>
                                                            <h4 class="css-kf3hkdn">Tanggal : 24 September 2023</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-3hehjak">
                                                <div class="css-kln2msn">
                                                    <span class="badge" style="background-color: #d1e7dd;color: #00a869;border: 1px solid #00a869">Berhasil</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                        <div class="mt-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Nama Outlet</h4>
                                                <h4 style="font-size: 13px;">Maitea Kota Wisata</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Kode Outlet</h4>
                                                <h4 style="font-size: 13px;">88888888999999</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Total Cup</h4>
                                                <h4 style="font-size: 13px;">25 Cup</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Total Harga</h4>
                                                <h4 style="font-size: 13px;">Rp 120.000</h4>
                                            </div>
                                        </div>
                                        <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                        <button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modalDetail">
                                            <div style="font-size: 14px;font-weight: 600;"><u>Lihat Detail ></u></div>
                                        </button>
                                    </section>
                                    <section class="css-v2hksop">
                                        <div class="css-yuij6na">
                                            <div class="css-vnmjd2j">
                                                <div>
                                                    <div class="css-asdertd2">
                                                        <div class="css-hj8kopa">
                                                            <img class="img-fluid" width="24" src="{{ asset('assets/images/pembelian.png') }}">
                                                        </div>
                                                        <div class="css-lkgd2bs">
                                                            <h3 class="css-belihdf2">Pembelian MaiTea</h3>
                                                            <h4 class="css-kf3hkdn">Tanggal : 24 September 2023</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-3hehjak">
                                                <div class="css-kln2msn">
                                                    <span class="badge" style="background-color: #f8d7da;color: #842029;border: 1px solid #842029">Tidak Berhasil</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                        <div class="mt-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Nama Outlet</h4>
                                                <h4 style="font-size: 13px;">Maitea Kota Wisata</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Kode Outlet</h4>
                                                <h4 style="font-size: 13px;">88888888999999</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Total Cup</h4>
                                                <h4 style="font-size: 13px;">25 Cup</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Total Harga</h4>
                                                <h4 style="font-size: 13px;">Rp 120.000</h4>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="targetTukarPoin" role="tabpanel" aria-labelledby="targetTukarPoin-tab" style="padding: 0px 16px 0px 0px;">
                                <div class="css-jf8nd2k mt-1">
                                    <section class="css-v2hksop">
                                        <div class="css-yuij6na">
                                            <div class="css-vnmjd2j">
                                                <div>
                                                    <div class="css-asdertd2">
                                                        <div class="css-hj8kopa">
                                                            <img class="img-fluid" width="24" src="{{ asset('assets/images/penukaran.png') }}">
                                                        </div>
                                                        <div class="css-lkgd2bs">
                                                            <h3 class="css-belihdf2">Penukaran Koin</h3>
                                                            <h4 class="css-kf3hkdn">Tanggal : 24 September 2023</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-3hehjak">
                                                <div class="css-kln2msn">
                                                    <span class="badge" style="background-color: #d1e7dd;color: #00a869;border: 1px solid #00a869">Terkirim</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                        <div class="mt-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="fw-bold" style="font-size: 13px;">Ovo 10 Ribu</h4>
                                                <h4 class="fw-bold" style="font-size: 13px;">#5X8047AA8E3843BS</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 style="font-size: 13px;">Poin Terpakai</h4>
                                                <h4 style="font-size: 13px;">100 Poin</h4>
                                            </div>
                                        </div>
                                    </section>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script>
    </body>
</html>