<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/verify-otp', function () {
    return view('otp');
})->name('otp');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/daftar-menu', function () {
    return view('daftar-menu');
})->name('daftarMenu');

Route::get('/daftar-menu/{idVarian}', function () {
    return view('varian-menu');
})->name('varianMenu');

Route::get('/gerai-maitea', function () {
    return view('gerai-maitea');
})->name('geraiMaitea');

Route::get('/riwayat-transaksi', function () {
    return view('riwayat-transaksi');
})->name('riwayatTransaksi');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
