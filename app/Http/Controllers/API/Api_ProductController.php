<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Api_ProductController extends Controller
{
    public function detail_product($slug)
    {
        $data = DB::table('ref_produks')
            ->select(
                'sku',
                'nama_produk',
                'harga',
                'deskripsi',
                'thumbnail',
                'path_thumbnail'
            )
            ->where('slug', $slug)
            ->first();

        if ($data != null) {
            return response()->json([
                'success' => true,
                'code'    => 200,
                'detailProduct' => $data,
            ]);
        } else {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Product not found',
                'code'      => 404
            ], 404);
        }
    }
}