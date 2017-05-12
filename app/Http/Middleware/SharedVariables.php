<?php

namespace App\Http\Middleware;

use App\Models\Categories;
use App\Models\News;
use App\Models\Tags;
use App\Models\Translations;
use Closure;

class SharedVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //// common data for all pages
        $data = Translations::all();
        $trans = [];
        foreach ($data as $d) {
            $trans[$d->key] = $d->value;
        }
        $trans = (object) $trans;

        view()->share('trans', $trans);

        $latest_news = News::orderBy('created_at', 'desc')->limit(3)->with('photos')->get();
        view()->share('latest_news', $latest_news);

        $popular_news = News::orderBy('views', 'desc')->limit(3)->with('photos')->get();
        view()->share('popular_news', $popular_news);

        $tags = Tags::has('news')->limit(config('site.num_tags'))->get();
        view()->share('tags', $tags);

        $categories = Categories::where('top', false)->with('photos')->get();
        view()->share('categoriesList', $categories);

        return $next($request);
    }
}
