<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AppServiceProvider extends ServiceProvider
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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
            if (auth()->check()) {
                $users = auth()->user();
                if (isset($users->id) && !empty($users->id)) {
                    View::share('currentUser', $users);
                } else {
                    auth()->logout();
                    return redirect()->route('login')->with('error', 'Không tìm thấy người dùng !');
                }
            }

        });
        Schema::defaultStringLength(191);
    }
}
