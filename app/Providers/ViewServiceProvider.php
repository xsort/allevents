<?php

namespace App\Providers;

use App\Models\News;
use App\Models\Tags;
use App\Models\Categories;
use Illuminate\Support\Facades\Schema;
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
<<<<<<< HEAD
       

=======

        //проверяем если есть таблица миграций
        if (!Schema::hasTable('migrations')) return;

        $latest_news = News::orderBy('created_at','desc')->limit(3)->with('photos')->get();
        view()->share('latest_news', $latest_news);

        $popular_news = News::orderBy('views','desc')->limit(3)->with('photos')->get();
        view()->share('popular_news', $popular_news);

        $tags = Tags::all();
        $tags = Tags::has('news')->limit(config('site.num_tags'))->get();
        view()->share('tags', $tags);

        $categories = Categories::where('top',false)->with('photos')->get();
        view()->share('categoriesList', $categories);

        $news = News::with('photos')->get();
        view()->share('newsList', $news);

>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
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
