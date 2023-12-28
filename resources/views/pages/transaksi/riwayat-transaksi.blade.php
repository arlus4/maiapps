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
                <div class="css-gh2snka" style="position: relative;">
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
                                <form id="filterForm" method="POST">
                                    <div class="d-flex justify-content-between align-items-center">
                                        @csrf
                                        <div class="css-nmv9n1k w-50">
                                            <select type="date" name="pilih_tahun" id="" class="form-control border-0" style="font-size: 13px!important;">
                                                <option>Pilih Tahun</option>
                                                @php
                                                    $currentYear = now()->year;
                                                @endphp

                                                @for ($year = 2020; $year <= $currentYear + 10; $year++)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="css-nmv9n1k w-50">
                                            <select type="date" name="pilih_bulan" class="form-control border-0" style="font-size: 13px!important;">
                                                <option>Pilih Bulan</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="css-fnk3sns text-center border-0 mt-0 w-25" style="font-size: 13px;border-radius:12px; padding: 6px;height: 32px;">Cari</button>
                                    </div>
                                </form>
                                <div class="css-jf8nd2k css-67db1jb">
                                    @foreach($getDaftarPembelian as $daftarPembelian)
                                        <section class="css-v2hksop css-88nckanl">
                                            <div class="css-yuij6na">
                                                <div class="css-vnmjd2j">
                                                    <div>
                                                        <div class="css-asdertd2">
                                                            <div class="css-hj8kopa">
                                                                <img class="img-fluid" width="24" src="{{ asset('assets/images/pembelian.png') }}">
                                                            </div>
                                                            <div class="css-lkgd2bs">
                                                                <h3 class="css-belihdf2">Pembelian MaiTea</h3>
                                                                <h4 class="css-kf3hkdn">Tanggal : {{ $daftarPembelian->Tanggal }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="css-3hehjak">
                                                    <div class="css-kln2msn">
                                                        <span class="badge" style="background-color: #d1e7dd;color: #00a869;border: 1px solid #00a869">Berhasil</span>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                            <div class="mt-4">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Nama Outlet</h4>
                                                    <h4 style="font-size: 13px;">{{ $daftarPembelian->nama_outlet }}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Kode Outlet</h4>
                                                    <h4 style="font-size: 13px;">{{ $daftarPembelian->kode_outlet }}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Total Cup</h4>
                                                    <h4 style="font-size: 13px;">{{ $daftarPembelian->total_cup }} Cup</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Total Harga</h4>
                                                    <h4 style="font-size: 13px;">Rp {{ str_replace(',','.',number_format($daftarPembelian->total_harga)) }}</h4>
                                                </div>
                                            </div>
                                            <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                            <button type="button" class="border-0 bg-white" onclick="detailPembelian('{{ $daftarPembelian->Year }}', '{{ $daftarPembelian->Month }}', '{{ Auth::user()->pembeli_id }}', '{{ Auth::user()->no_hp }}', '{{ $daftarPembelian->kode_outlet }}', '{{ $daftarPembelian->invoice_no }}')">
                                                <div style="font-size: 14px;font-weight: 600;"><u>Lihat Detail ></u></div>
                                            </button>
                                        </section>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="targetTukarPoin" role="tabpanel" aria-labelledby="targetTukarPoin-tab" style="padding: 0px 16px 0px 0px;">
                                <div class="css-jf8nd2k mt-1">
                                    @foreach($getTukarPoint as $tukarPoin)
                                        <section class="css-v2hksop">
                                            <div class="css-yuij6na">
                                                <div class="css-vnmjd2j">
                                                    <div>
                                                        <div class="css-asdertd2">
                                                            <div class="css-hj8kopa">
                                                                <img class="img-fluid" width="24" src="{{ asset('assets/images/penukaran.png') }}">
                                                            </div>
                                                            <div class="css-lkgd2bs">
                                                                <h3 class="css-belihdf2">Penukaran Poin</h3>
                                                                <h4 class="css-kf3hkdn">Tanggal : {{ $tukarPoin->tanggal_redeem }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="css-3hehjak">
                                                    <div class="css-kln2msn">
                                                        <span class="badge" style="color:#212121;">{{ $tukarPoin->status_delivery }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                            <div class="mt-4">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="fw-bold" style="font-size: 13px;">{{ $tukarPoin->gift_name }}</h4>
                                                    <h4 class="fw-bold" style="font-size: 13px;">{{ $tukarPoin->redeem_no }}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Poin Terpakai</h4>
                                                    <h4 style="font-size: 13px;">{{ $tukarPoin->Point_Terpakai }} Poin</h4>
                                                </div>
                                            </div>
                                        </section>
                                    @endforeach
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
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script>
        <script>
            $(document).ready(function () {
                $("#filterForm").submit(function (e) {
                    e.preventDefault();
                    
                    var formData = $(this).serialize();
                    var url      = "{{ url('/filter-riwayat-transaksi') }}";

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: formData,
                        success: function (data) {
                            $('.css-88nckanl').hide();
                            $('.css-67db1jb').show();
                            $(".css-67db1jb").empty();

                            var pembeliId = '{{ Auth::user()->pembeli_id }}';
                            var noHp      = '{{ Auth::user()->no_hp }}';

                            if (data.data.length === 0) {
                                var imageHtml = `
                                        <div class="css-99fn2kns">
                                            <div class="css-fjk00ans">
                                                <span class="css-n88dkna css-90ndqnk">
                                                    <img class="css-m2mska7c" src="{{ asset('assets/images/load.svg') }}">
                                                </span>
                                                <img class="css-7db7dabj" src="{{asset('assets/images/img_kosong.png')}}" alt="Tidak Ada Data">
                                            </div>
                                            <h5 class="css-d92nsklk css-kdj90mam">Oops, nggak ada transaksi <br><br>yang sesuai filter</h5>
                                            <p class="css-wrui2nsn" style="margin-bottom: 0px; line-height: 20px;font-weight: 500;">Coba refresh ulang filter Anda, ya.</p>
                                        </div>
                                    `;
                                $(".css-67db1jb").append(imageHtml);
                            }else{
                                data.data.forEach(function(pembelian) {
                                    var html = `
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
                                                                <h4 class="css-kf3hkdn">Tanggal : ${pembelian.Tanggal}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                            <div class="mt-4">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Nama Outlet</h4>
                                                    <h4 style="font-size: 13px;">${pembelian.nama_outlet}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Kode Outlet</h4>
                                                    <h4 style="font-size: 13px;">${pembelian.kode_outlet}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Total Cup</h4>
                                                    <h4 style="font-size: 13px;">${pembelian.total_cup}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 style="font-size: 13px;">Total Harga</h4>
                                                    <h4 style="font-size: 13px;">Rp ${pembelian.total_harga}</h4>
                                                </div>
                                                <hr style="margin: 12px 0px;height: 1px; background: #212121;">
                                                <button type="button" class="border-0 bg-white" onclick="detailPembelian('${pembelian.Year}', '${pembelian.Month}', '${pembeliId}', '${noHp}', '${pembelian.kode_outlet}', '${pembelian.invoice_no}')">
                                                    <div style="font-size: 14px;font-weight: 600;"><u>Lihat Detail ></u></div>
                                                </button>
                                            </div>
                                        </section>
                                    `;

                                    $(".css-67db1jb").append(html);
                                });
                            }
                            
                        },
                        error: function (error) {
                            console.error(error);
                        }
                    });
                });
            });

            function detailPembelian(year, month, pembeli_id, nomor_hp, outlet_id, invoice_no){
                var url         = "/detail-riwayat-transaksi/" + year + "/" + month + "/" + pembeli_id + "/" + nomor_hp + "/" + outlet_id + "/" + invoice_no;

                $.ajax({
                    url: url,
                    type: "GET",
                    success: function(data) {
                        modalBody = $('#modalDetail .modal-body').empty();

                        data.data.forEach(function (transaksi) {
                            var html = `
                                <div class="css-cjk3djp">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 style="font-size: 13px;">Nama Produk</h4>
                                        <h4 style="font-size: 13px;">${transaksi.nama_produk}</h4>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 style="font-size: 13px;">Jumlah Cup</h4>
                                        <h4 style="font-size: 13px;">${transaksi.total_qty} Cup</h4>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 style="font-size: 13px;">Harga</h4>
                                        <h4 style="font-size: 13px;">Rp ${numberWithCommas(transaksi.total_harga)}</h4>
                                    </div>
                                </div>
                            `;

                            $('#modalDetail .modal-body').append(html);
                        });

                        $('#modalDetail').modal('show');
                    }
                })
            }

            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        </script>
    </body>
</html>