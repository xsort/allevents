<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    	
	    $categories = Categories::where('top',false)->get(); 
        view()->share('categoriesList', $categories);

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
