<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function beranda(){
        $getUserDatas         = DB::select("SELECT username, no_hp FROM [maigroup].[dbo].[apps.display_name_user] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getUserPoints        = DB::select("SELECT reward FROM [maigroup].[dbo].[apps.display_total_point] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getUserTotalCups     = DB::select("SELECT qty FROM [maigroup].[dbo].[apps.display_total_cup] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
        $getUserBanners       = DB::select("SELECT banner_code, image_name FROM [maigroup].[dbo].[apps.banner_promo] ('ALL')");
        $getTopArticles       = DB::select("SELECT TOP 5 * FROM [maigroup].[dbo].[apps.news_article] ()");

        $getData              = $getUserDatas[0];
        $getUserPoint         = $getUserPoints[0];
        $getUserTotalCup      = $getUserTotalCups[0];
        $getTopArticle        = $getTopArticles[0];

        return view('beranda',[
            'getData'              => $getData,
            'getUserPoint'         => $getUserPoint,
            'getUserTotalCup'      => $getUserTotalCup,
            'getUserBanner'        => $getUserBanners,
            'getTopArticle'        => $getTopArticles,
        ]);
    }

    public function detailBanner($banner_code){
        $dataDetails = DB::select("SELECT banner_name, description, image_name FROM [maigroup].[dbo].[apps.banner_promo_detail] ('".$banner_code."')");

        return response()->json([
            'data' => $dataDetails
        ]);
    }
}
