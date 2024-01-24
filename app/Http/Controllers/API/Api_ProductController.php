<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Api_ProductController extends Controller
{
    public function detail_product($sku)
    {
        $getDetailProduct = DB::select("SELECT nama_produk, slug, harga, path_thumbnail, deskripsi FROM [maigroup].[dbo].[apps.produk_detail] ('1','".$sku."')");
        $getDetailProduct = $getDetailProduct[0] ?? null;

        return response()->json([
            'detailProduct' => $getDetailProduct,
        ]);
    }
}
