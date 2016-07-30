<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use App\Models\MenuCategories;
use App\Models\MenuProducts;
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
        $data          = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();

        $menu_products = $data->menu()->where('enabled', true)->orderByRaw("RAND()")->limit(16)->get();

        return view('products.menu')->with(compact('data','menu_products'));
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

        public function getReservation($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.reservation')->with('data', $product);
    }

        public function getPromo($slug)
    {
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.promo')->with('data',$product);
    }

    public function getGallery($slug, $name)
    {
        $data    = Products::where('slug',  $slug)->where('enabled',true)->firstOrFail();
        $gallery = Galleries::where('slug', $name)->where('enabled', true)->firstOrFail();
        $gallery->increment('views');

        //get related galleries
        $related = $data->galleries()->where('galleries.id','<>',$gallery->id)->limit(5)->get();

        return view('products.gallery')->with(compact('data', 'gallery', 'related'));
    }

}
