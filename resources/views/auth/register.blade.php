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
        <div id="bgAll">
            <div class="app-container">
                <div class="css-cnm2slja">
                    <div class="css-pojkf2n">
                        <div class="d-flex css-cnm2nks align-items-center">
                            <i class="fas fa-arrow-left" style="cursor: pointer;" onclick="window.location.href='login'"></i>
                            <span class="ms-3 fw-bold">Daftar MaiApps</span>
                        </div>
                    </div>
                    <div class="css-cnm2nks">
                        <span class="css-cnbjs2a">
                            Untuk mendaftarkan No. HP Anda, silakan isi No. HP dan password Anda pada kolom di bawah ini.<br><br>
                            Setelah itu, klik tombol 'Kirim OTP' untuk menerima Kode OTP yang akan dikirimkan ke nomor HP tersebut.<br><br>
                            Selanjutnya, masukkan Kode OTP yang telah Anda terima pada kolom 'Kode OTP', lalu tekan tombol 'Daftar'.Jika Anda ingin membatalkan, klik tombol 'Batal'.
                        </span>
                    </div>
                    <div class="css-cnm2nks mt-3">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nama Pengguna</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">No Telpon</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </form>
                        <a href="{{ route('otp') }}" class="btn css-fnk3sns mt-4">Daftar</a>
                        <p class="text-center mt-3">Sudah punya akun? <u onclick="window.location.href='login'" style="color: #00a869;cursor: pointer;">Masuk</u></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>