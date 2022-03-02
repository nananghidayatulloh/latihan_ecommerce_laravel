<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Tambahan
use Illuminate\Support\Facades\Schema;

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
        //TAMBAHAN
        Schema::defaultStringLength(191);
    }
}
