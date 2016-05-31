<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function getNews($slug){
        $news = News::where('slug',"=",$slug)->firstOrFail();
        $news->increment('views');
        return view('news.show')->with('data', $news);
    }

    public function getNewsByTagID($tag_id){
        $tag = Tags::find($tag_id);
        if (!$tag) abort(404);
        $news = $tag->news;

        dd($news);

        return view('news.list')->with('news', $news);
    }
    
    public function getNewsList()
    {
	    
	    $news = News::get(); 
		return view('news.newslist')->with('data',$news);
    }
}
