<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticatedController extends Controller
{
    public function loginUser(Request $request)
    {
        $rules = [
            'no_hp'      => 'required',
            'password'   => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Proses Login Gagal, Silahkan Coba Lagi",
                'data' => $validator->errors()
            ], 401);
        }

        if (!Auth::attempt($request->only(['no_hp', 'password']))) {
            return response()->json([
                'status' => false,
                'message' => "Nomor HP atau Password tidak sesuai"
            ], 401);
        }

        $datauser = User::where('no_hp', $request->no_hp)->whereNotNull('pembeli_id')->first();
        if ($datauser) {
            return response()->json([
                'status' => true,
                'message' => "Login Berhasil, Selamat Datang",
                'token' => $datauser->createToken('api-apps')->plainTextToken
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Maaf Anda belum terdaftar sebagai Pembeli Kami"
            ], 401);
        }
    }

    public function logoutUser(Request $request)
    {
        // Memeriksa apakah ada user yang sedang login
        $user = $request->user();
    
        if ($user) {
            // Hapus token akses saat ini
            $user->currentAccessToken()->delete();
    
            return response()->json(['message' => 'Berhasil Logout']);
        } else {
            // Menangani situasi ketika tidak ada user yang login
            return response()->json(['message' => 'No authenticated user'], 401);
        }
    }
    
}
