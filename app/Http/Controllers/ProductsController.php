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
		return view('products.photo')->with('data', $product);
    }

        public function getVideos($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.video')->with('data', $product);
    }

    	public function getPlan($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.plan')->with('data', $product);
    }

        public function getMenu($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.menu')->with('data', $product);
    }

        public function getInterier($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.interier')->with('data', $product);
    }

        public function getCard()
    {
        return view('products.card');
    }

        public function reservation($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.reservation')->with('data', $product);
    }

        public function getPromo($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.promo')->with('data',$product);
    }

}
