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
                            <i class="fas fa-arrow-left" style="cursor: pointer;" onclick="window.location.href='register'"></i>
                            <span class="ms-3 fw-bold css-op2bska">Verifikasi OTP</span>
                        </div>
                    </div>
                    <div class="css-cnm2nks">
                        <span class="css-cnbjs2a">
                            Setelah itu, klik tombol 'Kirim OTP' untuk menerima Kode OTP yang akan dikirimkan ke nomor HP tersebut.<br><br>
                            Selanjutnya, masukkan Kode OTP yang telah Anda terima pada kolom 'Kode OTP', lalu tekan tombol 'Daftar'. Jika Anda ingin membatalkan, klik tombol 'Batal'.
                        </span>
                    </div>
                    <div class="css-cnm2nks mt-3">
                        <div class="otp-container">
                            <input class="otp-input" type="text" maxlength="1" />
                            <input class="otp-input" type="text" maxlength="1" />
                            <input class="otp-input" type="text" maxlength="1" />
                            <input class="otp-input" type="text" maxlength="1" />
                        </div>
                        <a href="{{ route('beranda') }}" class="btn css-fnk3sns mt-4">
                            <span class="me-1">Lanjut</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <p class="text-center mt-3">Tidak dapat OTP? <u style="color: #00a869;">Kirim Ulang</u></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            const inputs = document.querySelectorAll('.otp-input');
            inputs.forEach((input, index) => {
                input.addEventListener('keydown', (e) => {
                    if (e.key >= 0 && e.key <= 9) {
                        inputs[index].value = ''; // Clear the input on new input
                        setTimeout(() => inputs[index + 1]?.focus(), 10); // Focus next input
                    } else if (e.key === 'Backspace') {
                        setTimeout(() => inputs[index - 1]?.focus(), 10); // Focus previous input
                    }
                });
            });
        </script>
    </body>
</html>