<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
                'token' => $datauser->createToken('api-apps')->accessToken
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Maaf Anda belum terdaftar sebagai Pembeli Kami"
            ], 401);
        }
    }

    public function logoutUser(Request $request)
    {
        $user = $request->user();
    
        if ($user) {
            // Revoke the token (menonaktifkan token pada table oauth_access_token)
            $user->token()->revoke();
    
            return response()->json(['message' => 'Berhasil Logout'], 200);
        } else {
            return response()->json(['message' => 'No authenticated user'], 401);
        }
    }

    public function refresh(Request $request)
    {
        $refreshToken = $request->input('refresh_token');

        // Lakukan request ke Passport untuk mendapatkan token baru
        $response = Http::asForm()->post(config('services.passport.login_endpoint'), [
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
            'client_id' => config('services.passport.client_id'),
            'client_secret' => config('services.passport.client_secret'),
            'scope' => '',
        ]);

        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['message' => 'Refresh token failed'], 401);
        }
    }
}