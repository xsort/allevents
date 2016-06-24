<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Content;

use App\Models\Categories;

use App\Models\Products;

use View;


class CommonController extends Controller
{
	
	  
	  
    public function getSlug($slug)
    {
	    $content = Content::where('slug',$slug)->where('enabled',true)->first();
	    if (isset($content)) return view('content.content')->with('data', $content);
	    
	    $category = Categories::where('slug',$slug)->where('enabled',true)->first();
	    $products = Products::where('enabled',true)->first();
	    if (isset($category)) {
		    
		    if ($category->children->count() > 0) {
			    return view('products.categories')->with('data', $category);
			} else { 
				return view('products.products')->with('data', $products);
			}
	    }
	    
	    $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.product')->with('data', $product);
    }
    
}
