<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     View::composer('*', function ($view) {
    //         if (Auth::guard('admin')->check()) {
    //             $admin = Auth::guard('admin')->user();
    //             // Pass instructor data to every view
    //             $view->with('adminName', $admin->name)->with('adminAvatar', $admin->profile_photo)->with('adminCover', $admin->cover_photo);
    //         }
    //     });
    // }

    public function boot()
    {
        View::composer('*', function ($view) {
            $user = null;
            $guards = ['superadmin', 'admin', 'faculty', 'esahayta', 'techsupport'];
            foreach ($guards as $guard) {
                if (auth($guard)->check()) {
                    $user = auth($guard)->user();
                    break;
                }
            }
            $view->with('currentUser', $user);
        });
    }
}
