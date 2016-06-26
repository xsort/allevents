<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Tags;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$news  = News::orderBy('created_at', 'desc')->paginate(5);
        //return view('news.list')->with('news', $news);
		$categories = Categories::where('top',true)->get();
		$products = Products::where('enabled',true)->where('top',true)->get();
		$tags = Products::where('top',true)->get();
		$news = News::where('top',true)->get();
		return view('index')->with('categories', $categories)->with('products', $products)->with('newslist',$news);
    }
}
