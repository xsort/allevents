<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use App\Models\MenuCategories;
use App\Models\MenuProducts;
use App\Models\Products;
use App\Models\Links;
use App\Http\Requests;


class ProductsController extends Controller
{
    private function getData($slug, $tpl)
    {
        $product = Products::getBySlug($slug);
        $links   = Links::getLinksMenu($product->id);

        return view($tpl)->with('data', $product)->with(compact('links'));
    }
    public function index($slug)
    {
        return $this->getData($slug, 'products.product');
    }

    public function getPhotos($slug)
    {
        return $this->getData($slug, 'products.photo');
    }

    public function getVideos($slug)
    {
        return $this->getData($slug, 'products.video');
    }

    public function getPlan($slug)
    {
        return $this->getData($slug, 'products.plan');
    }

    public function getMenu($slug)
    {
        $data            = Products::where('slug', $slug)->enabled()->firstOrFail();
        $menu_products   = $data->menu()->with('photos')->enabled()->top()->get();
        $menu_categories = $this->getMenuCategories($data->id);

        return $this->getData($slug, 'products.menu')->with(compact('menu_products', 'menu_categories'));
    }

    public function getMenuCategories($product_id)
    {
        $query1 = MenuCategories::enabled()
            ->with('children.menu_products')
            ->whereHas('children', function($q) use ($product_id){
                $q->whereHas('menu_products', function($q2) use ($product_id){
                    $q2->enabled()->where('product_id', $product_id);
                });
            });

        return MenuCategories::root()
            ->doesntHave('children')
            ->whereHas('menu_products', function($q) use ($product_id){
                $q->enabled()->where('product_id', $product_id);
            })
            ->union($query1)
            ->get();
    }

    public function getMenuProducts($slug, $slug_menu)
    {
        $data            = Products::where('slug', $slug)->enabled()->firstOrFail();
        $cur_cat         = MenuCategories::where('slug', $slug_menu)->firstOrFail();
        $menu_products   = $data->menu()->enabled()->where('category_id', $cur_cat->id)->get();
        $menu_categories = $this->getMenuCategories($data->id);
        return $this->getData($slug, 'products.menu')->with(compact('menu_products', 'menu_categories', 'cur_cat'));
    }

    public function getInterier($slug)
    {
        return $this->getData($slug, 'products.interier');
    }

    public function getCart()
    {
        return view('products.cart');
    }

    public function getReservation($slug)
    {
        return $this->getData($slug, 'products.reservation');
    }

    public function getPromo($slug)
    {
        return $this->getData($slug, 'products.promo');
    }

    public function getGallery($slug, $name)
    {
        $data    = Products::where('slug',  $slug)->where('enabled', true)->firstOrFail();
        $gallery = Galleries::where('slug', $name)->where('enabled', true)->firstOrFail();
        $gallery->increment('views');

        //get related galleries
        $related = $data->galleries()->where('galleries.id','<>',$gallery->id)->limit(5)->get();

        return $this->getData($slug, 'products.gallery')->with(compact('gallery', 'related'));
    }

    public function getShopProduct($id)
    {
        $data = MenuProducts::where('id', $id)->with('photos')->first();

        $photos = [];
        foreach($data->photos as $item){
            $photos[] = $item->source;
        }

        $out  = [
                    'id' => $data->id,
                    'name' => $data->name,
                    'description' => $data->description,
                    'price' => $data->price,
                    'photos' => $photos,
                ];

        return response()->json([
            'success' => true,
            'data'    => $out
        ]);
    }

}
