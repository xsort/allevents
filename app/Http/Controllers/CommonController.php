<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Content;

use App\Models\Categories;

use App\Models\Products;

use App\Models\News;

use View;


class CommonController extends Controller
{
    public function getSlug($slug)
    {
		//show content if slug exists
	    $content = Content::where('slug', $slug)->enabled()->first();
	    if (isset($content)) return view('content.content')->with('data', $content);

		//get category if slug exists
	    $category = Categories::where('slug', $slug)->enabled()->first();
	    if (isset($category)) {
			//if exists children categories
		    if ($category->children->count() > 0) {
			    return view('products.categories')->with('data', $category);
			} else {
				$category_id = $category->id;
				$products = Products::enabled()->whereHas('parents', function($query) use ($category_id){
								$query->where('categories_id', $category_id);
							})->with('photos')->get();
				return view('products.products')->with('data', $products)->with('category', $category);
			}
	    }

	    //show product if slug exists
	    $product = Products::where('slug',$slug)->enabled()->firstOrFail();
		return view('products.product')->with('data', $product);
    }

    public function getSearch(Request $request)
    {
		$searchword = $request->searchword;

		$data = [];

		//searching news and reports
		$allnews = News::enabled()->searchByKeyword($searchword)->with('products')->get();
		$news    = new Collection();
		$reports = new Collection();
		foreach($allnews as $value){
			if ($value->products->count() > 0){
				$reports->add($value);
			}else{
				$news->add($value);
			}
		}

		$data['news']    = $news;
		$data['reports'] = $reports;

		//searching products
		$data['products'] = Products::enabled()->searchByKeyword($searchword)->get();

		//searching afisha
		//TODO
		$data['posters'] = new Collection();


		$num_results = 0;
		foreach($data as $arr){
			$num_results += count($arr);
		}

    	return view('search')->with(compact('searchword', 'data', 'num_results'));
    }
    
}
