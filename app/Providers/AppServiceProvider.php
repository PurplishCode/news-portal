<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate as FacadesGate;
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
        FacadesGate::define('is-editor', function() {
            $authenticatedUser = auth()->user();
            return $authenticatedUser->level === 'editor';
        });
    }
}
