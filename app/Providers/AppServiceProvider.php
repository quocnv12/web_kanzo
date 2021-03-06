<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\models\introduce;
use App\models\polycies;
use App\models\{category,contact};

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
        view()->composer('*',function($view){
            $view->with([
                'introducegl' => introduce::all(),
                'polyciesgl' => polycies::all(),
                'categorygl' => category::all(),
                'contact' => contact::first(),
                
            ]);
        });
    }
}
