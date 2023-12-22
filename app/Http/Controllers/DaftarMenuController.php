<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarMenuController extends Controller
{
    public function daftarMenu(){
        $getDataMenus = DB::select("SELECT sku, nama_produk, slug, harga, path_thumbnail FROM [maigroup].[dbo].[apps.produk_list] ('1')");

        return view('pages.menu.daftar-menu',[
            'getDataMenu' => $getDataMenus
        ]);
    }

    public function detailDaftarMenu($sku){
        $getDetailMenus = DB::select("SELECT * FROM [maigroup].[dbo].[apps.produk_list_detail] ('1','".$sku."')");

        return view('pages.menu.detail-menu',[
            'getDetailMenu' => $getDetailMenus[0]
        ]);
    }
}
