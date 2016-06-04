<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $latest_news = News::orderBy('created_at','desc')->limit(3)->get();
        view()->share('latest_news', $latest_news);

        $popular_news = News::orderBy('views','desc')->limit(3)->get();
        view()->share('popular_news', $popular_news);

        $tags = Tags::all();
        view()->share('tags', $tags);
    }
}
