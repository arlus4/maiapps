<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RiwayatTransaksiController extends Controller
{
    public function riwayatTransaksi(){
        $getDaftarPembelians = DB::select("SELECT Year, Month, Tanggal, nama_outlet, kode_outlet, total_cup, total_harga, invoice_no  FROM [maigroup].[dbo].[apps.riwayat_transaksi] ('ALL','ALL','".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getTukarPoints      = DB::select("SELECT gift_name, redeem_no, tanggal_redeem, Point_Terpakai, status_delivery FROM [maigroup].[dbo].[apps.riwayat_redeem] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");

        return view('pages.transaksi.riwayat-transaksi',[
            'getDaftarPembelian' => $getDaftarPembelians,
            'getTukarPoint'      => $getTukarPoints
        ]);
    }

    public function filterRiwayatTransaksi(Request $request){
        $getDataFilters = DB::select("SELECT * FROM [maigroup].[dbo].[apps.riwayat_transaksi] ('".$request->pilih_tahun."','".$request->pilih_bulan."','".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");

        return response()->json([
            'data' => $getDataFilters
        ]);
    }

    public function detailRiwayatTransaksi($year, $month, $pembeli_id, $nomor_hp, $outlet_id, $invoice_no){
        $getDetailTransaksis = DB::select("SELECT nama_produk, total_qty, total_harga FROM [maigroup].[dbo].[apps.riwayat_transaksi_detail] ('".$year."','".$month."','".$pembeli_id."','".$nomor_hp."','".$outlet_id."','".$invoice_no."')");

        return response()->json([
            'data' => $getDetailTransaksis
        ]);
    }
}
