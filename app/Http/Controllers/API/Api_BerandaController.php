<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Api_BerandaController extends Controller
{
    public function beranda()
    {
        $getUserDatas         = DB::select("SELECT username, no_hp, nama_alamat FROM [maigroup].[dbo].[apps.display_name_user] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getUserPoints        = DB::select("SELECT reward FROM [maigroup].[dbo].[apps.display_total_point] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getUserTotalCups     = DB::select("SELECT qty FROM [maigroup].[dbo].[apps.display_total_cup] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getUserBanners       = DB::select("SELECT banner_code, image_name FROM [maigroup].[dbo].[apps.banner_promo] ('ALL')");
        $getListProduct       = DB::select("SELECT TOP 5 nama_produk, slug, harga, thumbnail, path_thumbnail FROM [maigroup].[dbo].[apps.produk_list] ('1')");
        $getTopArticles       = DB::select("SELECT TOP 5 * FROM [maigroup].[dbo].[apps.news_article] ()");
    
        // Pastikan untuk menangani kasus di mana hasil query mungkin kosong
        $getData              = $getUserDatas[0] ?? null;
        $getUserPoint         = $getUserPoints[0] ?? null;
        $getUserTotalCup      = $getUserTotalCups[0] ?? null;
    
        return response()->json([
            'data'                => $getData,
            'userPoint'           => $getUserPoint,
            'userTotalCup'        => $getUserTotalCup,
            'userBanner'          => $getUserBanners,
            'listProduct'         => $getListProduct,
            'topArticle'          => $getTopArticles,
        ]);
    }
    
}
