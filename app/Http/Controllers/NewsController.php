<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

class NewsController extends Controller
{
    public function getNews($slug){
        $news = News::where('slug',"=",$slug)->firstOrFail();
        $news->increment('views');
        return view('news.show')->with('data', $news);
    }

    
    public function getNewsByTagID($id){
        $tag    = Tags::findOrFail($id);
        $news   = $tag->news()->paginate(config('site.news_per_page'));
        return view('news.list')->with(compact('news', 'tag'));
      }
    
    public function getNewsList()
    {
	    
	    $news = News::get(); 
		return view('news.newslist')->with('data',$news);
    }

    public function getPromo($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.product-promo')->with('data',$product);
    }
}
