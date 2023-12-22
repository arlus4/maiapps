<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GeraiController extends Controller
{
    public function geraiMaitea(){
        $getGeraiMaiTeas = DB::select("SELECT outlet_id, nama_outlet, area FROM [maigroup].[dbo].[apps.gerai_outlet] ()");

        return view('pages.gerai.gerai-maitea',[
            'getGeraiMaiTea' => $getGeraiMaiTeas
        ]);
    }

    public function lihatMaps($outlet_id){
        $lihatMaps = DB::select("SELECT alamat_detail, map_location FROM [maigroup].[dbo].[apps.gerai_outlet_detail] ('".$outlet_id."')");

        return response()->json([
            'data' => $lihatMaps
        ]);
    }
}
