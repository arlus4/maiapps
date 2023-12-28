<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Check_Connection;
use App\Http\Controllers\GeraiController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\RiwayatTransaksiController;

Route::get('/check-connection', [Check_Connection::class, 'checkConnection']);
Route::get('/check-php', [Check_Connection::class, 'checkPhp']);

Route::get('/', function () {
    return view('index');
});

Route::get('/verify-otp', function () {
    return view('otp');
})->name('otp');

Route::get('/riwayat-transaksi', function () {
    return view('riwayat-transaksi');
})->name('riwayatTransaksi');

Route::get('/bonus-maitea', function () {
    return view('bonus-maitea');
})->name('bonusMaitea');

Route::get('/tukar-poin', function () {
    return view('tukar-poin');
})->name('tukarPoin');

Route::get('/artikel/mengenal-jenis-dan-manfaat-teh-untuk-kesehatan-tubuh', function () {
    return view('detail-artikel');
})->name('detailArtikel');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




// Login
Route::post('loginUser', [AuthController::class, 'login'])->name('loginUser');

Route::middleware('auth')->group(function () {

    Route::get('beranda', [BerandaController::class, 'beranda'])->name('beranda');
    Route::get('detail-banner/{banner_code}', [BerandaController::class, 'detailBanner'])->name('detailBanner');

    Route::get('daftar-menu', [DaftarMenuController::class, 'daftarMenu'])->name('daftarMenu');
    Route::get('daftar-menu/{sku}', [DaftarMenuController::class, 'detailDaftarMenu'])->name('detailDaftarMenu');

    Route::get('gerai-maitea', [GeraiController::class, 'geraiMaitea'])->name('geraiMaitea');
    Route::get('lihat-maps/{outlet_id}', [GeraiController::class, 'lihatMaps'])->name('lihatMaps');

    Route::get('riwayat-transaksi', [RiwayatTransaksiController::class, 'riwayatTransaksi'])->name('riwayatTransaksi');
    Route::get('detail-riwayat-transaksi/{year}/{month}/{pembeli_id}/{nomor_hp}/{outlet_id}/{invoice_no}', [RiwayatTransaksiController::class, 'detailRiwayatTransaksi'])->name('detailRiwayatTransaksi');
    Route::post('filter-riwayat-transaksi', [RiwayatTransaksiController::class, 'filterRiwayatTransaksi'])->name('filterRiwayatTransaksi');

    Route::get('bonus-maitea', [BonusController::class, 'bonusMaitea'])->name('bonusMaitea');


    Route::get('user', [UserController::class, 'user'])->name('user');

    // di komen sementara
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
