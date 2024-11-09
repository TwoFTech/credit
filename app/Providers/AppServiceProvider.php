<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
    public function boot(): void
    {
        // Définir la langue de l'application en fonction de la session
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
        // Composer pour partager les notifications non lues si l'utilisateur est authentifié
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $view->with('notifications', Auth::user()->unreadNotifications);
            }
        });
    }
}
