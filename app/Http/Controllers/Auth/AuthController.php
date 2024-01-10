<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'no_hp'      => 'required',
            'password'   => 'required',
        ]);
    
        $credentials = [
            'no_hp'          => $request->input('no_hp'),
            'password'       => $request->input('password'),
            'users_type'     => 1,
        ];
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/beranda')->with(['success' => 'Selamat Datang']);
        }
    
        return redirect()->back()->with(['error' => 'Silahkan Coba Lagi']);
    }

    public function checkAuthentication()
    {
        $authenticated = Auth::check();

        return response()->json(['authenticated' => $authenticated]);
    }
    
}
