<?php

namespace App\Providers;

use App\Rubric;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
        //логгирование sql запросов
        DB::listen(function ($query){
            //Log::info($query->sql);
            Log::channel('sqllogs')->info($query->sql);
//            dump($query->sql, $query->bindings);
        });
        view()->composer('layouts.footer', function($view){
            $view->with('rubrics', Rubric::all());
        });
    }
}
