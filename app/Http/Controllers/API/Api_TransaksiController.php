<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Api_TransaksiController extends Controller
{
    public function list_voucher()
    {
        $data = DB::table('log_bonus')->where('nomor_telfon', Auth::user()->no_hp)->where('is_gift', 0)->get();

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
