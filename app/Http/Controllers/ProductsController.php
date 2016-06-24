<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

class ProductsController extends Controller
{

        public function getPhotos($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.product-photo')->with('data', $product);
    }

        public function getVideos($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.product-video')->with('data', $product);
    }

    	public function getPlan($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.product-plan')->with('data', $product);
    }

        public function getMenu($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.product-menu')->with('data', $product);
    }

}
