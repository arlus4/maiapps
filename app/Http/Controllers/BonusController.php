<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BonusController extends Controller
{
    public function bonusMaitea(){
        $getBonusVouchers   = DB::select("SELECT * FROM [maigroup].[dbo].[apps.display_voucher] ('1234','0812345678','888888889999999999')");
        $getRiwayatVouchers = DB::select("SELECT * FROM [maigroup].[dbo].[apps.display_voucher_history] ('1234','0812345678','888888889999999999')");
        // $getRiwayatVouchers = DB::select("SELECT * FROM [maigroup].[dbo].[apps.display_voucher_history] ('".Auth::user()->pembeli_id."','".Auth::user()->no_hp."','".Auth::user()->outlet_id."')");

        return view('pages.bonus.bonus-maitea',[
            'getBonusVoucher'   => $getBonusVouchers,
            'getRiwayatVoucher' => $getRiwayatVouchers
        ]);
    }
}
