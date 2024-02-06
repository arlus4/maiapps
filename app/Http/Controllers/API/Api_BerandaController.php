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
        $getDataBanner        = DB::table('banner_promo')->select('banner_code', 'banner_name', 'description', 'path', 'isall', 'start_date', 'end_date')->get();
        $getUserDatas         = DB::select("SELECT name, email, no_hp, nama_alamat, avatar, path_avatar FROM [maigroup].[dbo].[apps.display_name_user] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."')");
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
            'dataBanner'          => $getDataBanner,
            'userTotalCup'        => $getUserTotalCup,
            'userBanner'          => $getUserBanners,
            'listProduct'         => $getListProduct,
            'topArticle'          => $getTopArticles
        ]);
    }
    
    public function gerai()
    {
        $data = DB::table('outlets')
                    ->select(
                        'outlets.outlet_id',
                        'outlets.nama_outlet',
                        'outlets.project_id',
                        'outlets.slug',
                        'outlets.no_hp',
                        'outlets.image_name',
                        'outlets.path',
                        'alamat_outlets.alamat_detail',
                        'alamat_outlets.kodepos',
                        'alamat_outlets.map_location',
                        'ref_kelurahan.nama_kelurahan',
                        'ref_kecamatan.nama_kecamatan',
                        'ref_kotakab.nama_kotakab'
                    )
                    ->leftJoin('alamat_outlets', 'outlets.outlet_id', 'alamat_outlets.outlet_id')
                    ->leftJoin('ref_kelurahan', 'alamat_outlets.kode_kelurahan', 'ref_kelurahan.kode_kelurahan')
                    ->leftJoin('ref_kecamatan', 'alamat_outlets.kode_kecamatan', 'ref_kecamatan.kode_kecamatan')
                    ->leftJoin('ref_kotakab', 'alamat_outlets.kode_kotakab', 'ref_kotakab.kode_kotakab')
                    ->where('is_verified', 'true')
                    ->get();

        if ($data != null){
            return response()->json([
                'status'    => 'success',
                'code'      => 200,
                'gerai'     => $data,
            ], 200);
        } else {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Gerai not found',
                'code'      => 404
            ], 404);
        }
    }
}
