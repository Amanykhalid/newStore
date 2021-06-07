<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        // Validator::extend('filter',,function($attribute,$value,$parms){
        //     foreach($parms as $word)
        //     if(stripos($value,$this->word) !==false){
        //         $fail('you can not use the word "Laravel"!');
        //     }}
        //     )}
        // With vendor:publish
        //Paginator::defaultView('vendor.pagination.bootstrap-4');
        //Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-4');
        // Without vendor:publish
        Paginator::useBootstrap();
    }
}
