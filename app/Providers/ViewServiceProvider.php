<?php

namespace App\Providers;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $latest_news = News::orderBy('created_at','desc')->limit(3)->get();
        view()->share('latest_news', $latest_news);

        $popular_news = News::orderBy('views','desc')->limit(3)->get();
        view()->share('popular_news', $popular_news);

        $tags = Tags::all();
        view()->share('tags', $tags);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
