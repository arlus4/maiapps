<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Api_ArtikelController extends Controller
{
    public function article()
    {
        $data = DB::table('news_article')
            ->select(
                'news_code',
                'headline',
                'caption',
                'news_content',
                'thumbnail',
                'path_thumbnail'
            )
            ->get();

        if ($data != null) {
            return response()->json([
                'success' => true,
                'code'    => 200,
                'article' => $data,
            ], 200);
        } else {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Article not found',
                'code'      => 404
            ], 404);
        }
    }

    public function detail_article($news_code)
    {
        $data = DB::table('news_article')
            ->select(
                'news_code',
                'headline',
                'caption',
                'news_content',
                'thumbnail',
                'path_thumbnail'
            )
            ->where('news_code', $news_code)
            ->first();

        $image = DB::table('news_picture')
            ->select(
                'news_code',
                'image_name',
                'path'
            )
            ->where('news_code', $news_code)
            ->get();
        
        if ($data != null){
            return response()->json([
                'status'    => 'success',
                'code'      => 200,
                'article'   => $data,
                'image'     => $image,
            ], 200);
        } else {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Article not found',
                'code'      => 404
            ], 404);
        }
    }
}
