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
                    <a href="{{ route('beranda') }}">
                        <div class="header-icon text-white">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                    <div class="header-title text-white">
                        Profil
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
                <div class="d-flex" style="padding: 16px;">
                    <img class="rounded" src="{{ asset('assets/images/c3.png') }}" style="width: 64px; height: 64px;">
                    <div class="css-wfjk99ja">
                        <div class="css-kfn22nsl">
                            <h3 class="css-nameProf">{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="css-phone">{{ Auth::user()->no_hp }}</div>
                        <div class="css-email">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="css-op0f22j">
                        <a class="text-decoration-none text-dark" href="{{ route('profilSettings') }}">
                            <i class="fas fa-pencil"></i>
                        </a>
                    </div>
                </div>
                <div class="css-oon2nsp">
                    <div class="css-h22nsui">
                        <h4 class="css-hjj2uio">
                            <span>Pengaturan Akun</span>
                        </h4>
                        <ul class="css-uu2idnn css-kk2jksa">
                            <a class="text-decoration-none" href="{{ route('profilUbahPassword') }}">
                                <li class="css-yy2dnka css-oop2nsm" style="background-size: 24px;background-image: url('../assets/images/lock.png')">
                                    <div class="css-container-list" style="padding-left: 36px; padding-right: 8px">
                                        <p class="css-container-list-text css-fwop98j">Kemanan Akun</p>
                                        <p style="color: #343a40; max-height: 44px; font-weight: 400;font-size: 0.8rem; line-height: 18px;margin:2px 0px 0px;">Atur Password / Kata Sandi Anda</p>
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>
                    <div class="css-f2uidha">
                        <ul class="css-uu2idnn m-0">
                            <a class="text-decoration-none" href="{{ route('seputarMaiApps') }}">
                                <li class="css-yy2dnka css-oop2nsm" style="background-size: 24px;background-image: url('../assets/images/info.png')">
                                    <div style="padding-left: 36px; padding-right: 8px">
                                        <p class="css-container-list-text css-fwop98j">Seputar MaiApps</p>
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>
                    <div class="css-f2uidha">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="border-0 bg-white">
                                <ul class="css-uu2idnn m-0">
                                    <li class="css-yy2dnka css-oop2nsm" style="background-size: 24px;background-image: url('../assets/images/logout.png')">
                                        <div style="padding-left: 36px; padding-right: 8px">
                                            <p class="css-container-list-text css-fwop98j">Keluar Akun / Logout</p>
                                        </div>
                                    </li>
                                </ul>
                            </button>
                        </form>
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