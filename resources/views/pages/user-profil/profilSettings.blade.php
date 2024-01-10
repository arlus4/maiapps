<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maitea Apps Nusantara</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.bundle.css') }}" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        <div id="headerDaftar" class="headerDaftar">
            <div class="app-container bg-white">
                <div class="css-kl2jsna px-3">
                    <a href="{{ route('profil') }}">
                        <div class="header-icon text-white">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                    <div class="header-title text-white">
                        Ubah Profil
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil, </strong> {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal,</strong> {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="w-100">
                    <div class="css-hhj2kdn">
                        <input class="css-aipnd37l" type="file" accept="image/jpeg, .jpeg, .jpg, image/png, .png">
                        <div class="css-vob2sm9">
                            <!-- <label class="css-pobv88n"></label> -->
                            <img width="90px" height="90px" class="css-img33hsn" src="{{ asset($global_user->path_avatar) }}" alt="">
                        </div>
                        <a style="color: #00a869;" class="text-decoration-none css-tc22bsa css-uin22nd" href="{{ route('profilUbahFoto') }}">
                            <div class="css-tyb2bs8"></div>
                            <div class="css-ruy9fjb">
                                <span class="css-uvb2bj8">Ubah Foto Profil</span>
                            </div>
                        </a>
                    </div>
                    <div class="css-vry22ha">
                        <div class="d-flex">
                            <p class="css-hj0pkj">Info Profil</p>
                        </div>
                        <div class="css-m8ffjop">
                            <div class="css-ytt3nda">
                                <div class="css-gg2hgsl">
                                    <p style="font-size: 14px; color: #6D7588; font-weight: 500;">User ID</p>
                                </div>
                                <div class="css-ui33hhjs">
                                    <p class="css-bn3nbdj">
                                        <span style="font-weight: 500;color: #212121;">{{ Auth::user()->pembeli_id }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="text-dark text-decoration-none" href="{{ route('profilUbahNama') }}">
                            <div class="css-m8ffjop">
                                <div class="css-ytt3nda">
                                    <div class="css-gg2hgsl">
                                        <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Nama</p>
                                    </div>
                                    <div class="css-ui33hhjs">
                                        <p class="css-bn3nbdj">
                                            <span style="font-weight: 500;color: #212121;">{{ Auth::user()->name }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div style="align-self: start;">
                                    <i class="fas fa-chevron-right fa-xs"></i>
                                </div>
                            </div>
                        </a>
                        <div class="css-m8ffjop">
                            <div class="css-ytt3nda">
                                <div class="css-gg2hgsl">
                                    <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Username</p>
                                </div>
                                <div class="css-ui33hhjs">
                                    <p class="css-bn3nbdj">
                                        <span style="font-weight: 500;color: #212121;">{{ Auth::user()->username }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="css-m8ffjop">
                            <div class="css-ytt3nda">
                                <div class="css-gg2hgsl">
                                    <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Email</p>
                                </div>
                                <div class="css-ui33hhjs">
                                    <p class="css-bn3nbdj">
                                        <span style="font-weight: 500;color: #212121;">
                                            @if(Auth::user()->email == null || Auth::user()->email == "")
                                                Harap Masukkan Email
                                            @else
                                                {{ Auth::user()->email }}
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="css-m8ffjop">
                            <div class="css-ytt3nda">
                                <div class="css-gg2hgsl">
                                    <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Nomor HP</p>
                                </div>
                                <div class="css-ui33hhjs">
                                    <p class="css-bn3nbdj">
                                        <span style="font-weight: 500;color: #212121;">{{ Auth::user()->no_hp }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="css-vry22ha">
                        <div class="d-flex">
                            <p class="css-hj0pkj">Info Pribadi</p>
                        </div>
                        <a class="text-dark text-decoration-none" href="{{ route('profilUbahBirthDate') }}">
                            <div class="css-m8ffjop">
                                <div class="css-ytt3nda">
                                    <div class="css-gg2hgsl">
                                        <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Tanggal Lahir</p>
                                    </div>
                                    <div class="css-ui33hhjs">
                                        <p class="css-bn3nbdj">
                                            <span style="font-weight: 500;color: #212121;">{{ \Carbon\Carbon::parse($data->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div style="align-self: start;">
                                    <i class="fas fa-chevron-right fa-xs"></i>
                                </div>
                            </div>
                        </a>
                        <a class="text-dark text-decoration-none" href="{{ route('profilUbahJenisKelamin') }}">
                            <div class="css-m8ffjop">
                                <div class="css-ytt3nda">
                                    <div class="css-gg2hgsl">
                                        <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Jenis Kelamin</p>
                                    </div>
                                    <div class="css-ui33hhjs">
                                        <p class="css-bn3nbdj">
                                            <span style="font-weight: 500;color: #212121;">
                                                @if( $data->jenis_kelamin == "P")
                                                    Pria
                                                @else
                                                    Wanita
                                                @endif
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div style="align-self: start;">
                                    <i class="fas fa-chevron-right fa-xs"></i>
                                </div>
                            </div>
                        </a>
                        <a class="text-dark text-decoration-none" href="{{ route('profilUbahAlamat') }}">
                            <div class="css-m8ffjop">
                                <div class="css-ytt3nda">
                                    <div class="css-gg2hgsl">
                                        <p style="font-size: 14px; color: #6D7588; font-weight: 500;">Alamat</p>
                                    </div>
                                    <div class="css-ui33hhjs">
                                        <p class="css-bn3nbdj">
                                            <span style="font-weight: 500;color: #212121;">{{ $data->alamat_detail }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div style="align-self: start;">
                                    <i class="fas fa-chevron-right fa-xs"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script>
        <script>

        </script>
    </body>
</html>