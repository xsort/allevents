<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use App\Models\Types;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

class NewsController extends Controller
{
    public function getNews($slug)
    {
        $news = News::where('slug',"=",$slug)->firstOrFail();
        $news->increment('views');
        return view('news.show')->with('data', $news);
    }

    
    public function getNewsByTagID($id)
    {
        $type   = Types::find(1);
        $tag    = Tags::findOrFail($id);
        $data   = $tag->news()->with('photos')->paginate(config('site.news_per_page'));
        return view('news.newslist')->with(compact('data', 'tag', 'type'));
    }
    
    public function getNewsList()
    {
        $type = Types::find(1);
        $data = News::with('photos')->news()->get();
		return view('news.newslist')->with(compact('data', 'type'));
    }

    public function getReportsList()
    {
        $type = Types::find(2);
        $data = News::with('photos')->reports()->get();
        return view('news.newslist')->with(compact('data', 'type'));
    }

    public function getPromoList()
    {
        $type = Types::find(3);
        $data = News::with('photos')->promo()->get();
        return view('news.newslist')->with(compact('data', 'type'));
    }
}
