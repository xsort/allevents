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
		$categories = Categories::where('top',true)->with('photos')->get();
		$products = Products::where('enabled',true)->where('top',true)->with('photos')->get();
		//$tags = Products::where('top',true)->get();
		$news = News::where('top', true)->with('photos')->get();

		$reports_tags = Tags::with('photos')->whereHas('news', function ($query) {
            $query->reports();
        })->enabled()->get();;


		return view('index')->with(compact('categories', 'products', 'reports_tags'))->with('newslist',$news);
    }

    public function cap()
    {
        return view('cap');
    }
}
