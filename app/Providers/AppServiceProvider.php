<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \DB::listen(function($sql, $bindings, $time) {
            $sql = str_replace(['%', '?'], ["'%%s'", "'%s'"], $sql);
            \Log::info(vsprintf($sql, $bindings));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
