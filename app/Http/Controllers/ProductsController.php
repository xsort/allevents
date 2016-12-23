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
        $product = Products::where('slug', $slug)->enabled()->firstOrFail();
        return view('products.photo')->with('data', $product);
    }

    public function getVideos($slug)
    {
        $product = Products::where('slug',$slug)->enabled()->firstOrFail();
		return view('products.video')->with('data', $product);
    }

    public function getPlan($slug)
    {
        $product = Products::where('slug',$slug)->enabled()->firstOrFail();
		return view('products.plan')->with('data', $product);
    }

    public function getMenu($slug)
    {
        $data            = Products::where('slug', $slug)->enabled()->firstOrFail();
        $menu_products   = $data->menu()->with('photos')->enabled()->top()->get();
        $menu_categories = $this->getMenuCategories();

        return view('products.menu')->with(compact('data', 'menu_products', 'menu_categories'));
    }

    public function getMenuCategories()
    {
        $query1 = MenuCategories::enabled()
            ->whereHas('children', function($q){
                $q->whereHas('menu_products', function($q2){
                    $q2->enabled();
                });
            });

        return MenuCategories::root()
            ->doesntHave('children')
            ->whereHas('menu_products', function($q){
                $q->enabled();
            })
            ->union($query1)
            ->get();
    }

    public function getMenuProducts($slug, $slug_menu)
    {
        $data            = Products::where('slug', $slug)->enabled()->firstOrFail();
        $cur_cat         = MenuCategories::where('slug', $slug_menu)->firstOrFail();
        $menu_products   = $data->menu()->enabled()->where('category_id', $cur_cat->id)->get();
        $menu_categories = $this->getMenuCategories();
        return view('products.menu')->with(compact('data', 'menu_products', 'menu_categories', 'cur_cat'));
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
        $data    = Products::where('slug',  $slug)->where('enabled', true)->firstOrFail();
        $gallery = Galleries::where('slug', $name)->where('enabled', true)->firstOrFail();
        $gallery->increment('views');

        //get related galleries
        $related = $data->galleries()->where('galleries.id','<>',$gallery->id)->limit(5)->get();

        return view('products.gallery')->with(compact('data', 'gallery', 'related'));
    }

}
