<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;

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
        //
        Filament::serving(function () {
            // Using Vite
            Filament::registerTheme(
                app(Vite::class)('resources/css/filament.css'),
            );

            // Using Mix
           // Filament::registerTheme(
             //   mix('css/filament.css'),
            //);
        });
    }
}
