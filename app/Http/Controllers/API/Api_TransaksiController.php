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
        $user = Auth::user();

        if ($user === null) {
            // Tangani kasus di mana tidak ada pengguna yang login
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $pembeliId = $user->pembeli_id;

        $data = DB::table('log_bonus')->where('pembeli_id', $pembeliId)->where('is_gift', 0)->get();

        if ($data != null){
            return response()->json([
                'status'    => 'success',
                'code'      => 200,
                'gerai'     => $data,
            ], 200);
        } else {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Bonus not found',
                'code'      => 404
            ], 404);
        }
    }
}
