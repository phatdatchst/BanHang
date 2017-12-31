<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DanhMuc;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layout.header',function($view){
            $nhomsp = DanhMuc::all();
            $view->with('nhomsp', $nhomsp);
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
