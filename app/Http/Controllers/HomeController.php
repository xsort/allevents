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
<<<<<<< HEAD

		$reports_tags = Tags::with('photos')->whereHas('news', function ($query) {
            $query->reports();
        })->enabled()->get();;


		return view('index')->with(compact('categories', 'products', 'reports_tags'))->with('newslist',$news);
=======
		return view('index')->with('categories', $categories)->with('products', $products)->with('newslist',$news);
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function cap()
    {
        return view('cap');
    }
}
