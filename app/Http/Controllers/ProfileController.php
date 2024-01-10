<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\View\View;
use App\Models\MUserDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function profil(){
        return view('pages.user-profil.profil');
    }
    
    public function profilSettings(){
        $dataDetail = MUserDetail::where('users_details.user_id', Auth::user()->id)->first();

        return view('pages.user-profil.profilSettings',[
            'data' => $dataDetail
        ]);
    }

    public function profilUbahFoto(){
        return view('pages.user-profil.ubahFoto');
    }

    public function profilUbahNama(){
        return view('pages.user-profil.ubahNama');
    }

    public function profilUbahBirthDate(){
        return view('pages.user-profil.ubahBirthDate');
    }

    public function profilUbahJenisKelamin(){
        return view('pages.user-profil.ubahJenisKelamin');
    }

    public function profilUbahAlamat(){
        return view('pages.user-profil.ubahAlamat');
    }

    public function profilUbahPassword(){
        return view('pages.user-profil.ubahPassword');
    }


    public function storeUbahFoto(Request $request){
        try {
            DB::beginTransaction();
        
            $dataDetail = MUserDetail::where('users_details.user_id', Auth::user()->id)->first();
        
            if ($request->hasFile('inputanFoto')) {
                $request->validate([
                    'inputanFoto'       => 'required|mimes:jpeg,png,jpg,gif',
                ], [
                    'inputanFoto.mimes' => 'Format file exception harus berupa JPG, JPEG, atau PNG.', // Pesan error
                ]);
        
                if ($dataDetail->avatar && Storage::disk('public')->exists('user/avatar/' . $dataDetail->avatar)) {
                    Storage::disk('public')->delete('user/avatar/' . $dataDetail->avatar);
                }
        
                $imageName = Str::random(10) . '_' . $request->inputanFoto->getClientOriginalName();
                $request->inputanFoto->storeAs('user/avatar/', $imageName, 'public');
        
                $imagePath = 'storage/user/avatar/' . $imageName;
            } else {
                $imageName = $dataDetail->avatar;
                $imagePath = $dataDetail->path_avatar;
            }
        
            $dataDetail->avatar      = $imageName;
            $dataDetail->path_avatar = $imagePath;
            $dataDetail->save();
        
            DB::commit();
        
            return redirect()->route('profilSettings')->with('success', 'Mengubah Foto');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
        
            return redirect()->route('profilSettings')->with('error', 'Mengubah Foto');
        }
    }

    public function storeUbahNama(Request $request){
        try {
            DB::beginTransaction();

            $request->validate([
                'inputanNama' => 'required|string|max:255',
            ]);

            Auth::user()->update([
                'name' => $request['inputanNama']
            ]);

            DB::commit();

            return redirect()->route('profilSettings')->with('success', 'Mengubah Nama');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->route('profilSettings')->with('error', 'Mengubah Nama');
        }
    }

    public function storeUbahBirthDate(Request $request){
        try {
            DB::beginTransaction();

            $request->validate([
                'inputanDate' => 'required',
            ]);

            $dataDetail                 = MUserDetail::where('users_details.user_id', Auth::user()->id)->first();
            $dataDetail->tanggal_lahir  = $request['inputanDate'];

            $dataDetail->save();

            DB::commit();

            return redirect()->route('profilSettings')->with('success', 'Mengubah Tanggal Lahir');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);


            return redirect()->route('profilSettings')->with('error', 'Mengubah Tanggal Lahir');
        }
    }

    public function storeUbahJenisKelamin(Request $request){
        try {
            DB::beginTransaction();

            $request->validate([
                'jenis_kelamin' => 'required',
            ]);

            $dataDetail                 = MUserDetail::where('users_details.user_id', Auth::user()->id)->first();
            $dataDetail->jenis_kelamin  = $request['jenis_kelamin'];

            $dataDetail->save();

            DB::commit();

            return redirect()->route('profilSettings')->with('success', 'Mengubah Jenis Kelamin');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);


            return redirect()->route('profilSettings')->with('error', 'Mengubah Jenis Kelamin');
        }
    }

    public function storeUbahAlamat(Request $request){
        try {
            DB::beginTransaction();

            $request->validate([
                'inputanAlamat' => 'required',
            ]);

            $dataDetail                 = MUserDetail::where('users_details.user_id', Auth::user()->id)->first();
            $dataDetail->alamat_detail  = $request['inputanAlamat'];

            $dataDetail->save();

            DB::commit();

            return redirect()->route('profilSettings')->with('success', 'Mengubah Alamat');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);


            return redirect()->route('profilSettings')->with('error', 'Mengubah Alamat');
        }
    }

    public function storeUbahPassword(Request $request){
        try {
            DB::beginTransaction();

            $request->validate([
                'inputanPassword' => 'required',
            ]);

            Auth::user()->update([
                'password' => Hash::make($request['inputanPassword'])
            ]);

            DB::commit();

            return redirect()->route('profil')->with('success', 'Mengubah Password');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);

            return redirect()->route('profil')->with('error', 'Mengubah Password');
        }
    }
    

    public function seputarMaiApps(){
        return view('pages.user-profil.seputarMaiApps');
    }




    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current-password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
