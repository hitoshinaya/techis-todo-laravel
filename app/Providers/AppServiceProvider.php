<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/*カリキュラム記載のコード追加*/
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        //
        if(\App::environment(['production']) || \App::environment(['develop'])){
            \URL::forceScheme('https');
        }
    }
}
