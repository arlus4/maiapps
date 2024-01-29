<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function detailArticle(Request $request){
        $getDetailArticles    = DB::select("SELECT * FROM [maigroup].[dbo].[apps.news_article_content] ('N001')");

        return view('pages.article.detail-article',[
            'getDetailArticle' => $getDetailArticles,
        ]);
    }
}
