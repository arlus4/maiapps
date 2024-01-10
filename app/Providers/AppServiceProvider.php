<?php

namespace App\Providers;

use App\Models\MUserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (Auth::check()) { // Cek apakah pengguna telah masuk
                $user = Auth::user()->id;
                $global_users = MUserDetail::select('avatar', 'path_avatar','tanggal_lahir','alamat_detail')
                                ->leftjoin('users_login', 'users_details.user_id', '=', 'users_login.id')
                                ->where('users_details.user_id', $user)
                                ->first();
                $view->with('global_user', $global_users);
            } else {
                $view->with('global_user', null);
            }
        });

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        };
    }
}
