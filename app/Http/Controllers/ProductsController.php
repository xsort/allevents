<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use App\Models\MenuCategories;
use App\Models\MenuProducts;
<<<<<<< HEAD
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
=======
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

class ProductsController extends Controller
{
    public function getPhotos($slug)
    {
        $product = Products::where('slug', $slug)->enabled()->firstOrFail();
        return view('products.photo')->with('data', $product);
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getVideos($slug)
    {
<<<<<<< HEAD
        return $this->getData($slug, 'products.video');
=======
        $product = Products::where('slug',$slug)->enabled()->firstOrFail();
		return view('products.video')->with('data', $product);
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getPlan($slug)
    {
<<<<<<< HEAD
        return $this->getData($slug, 'products.plan');
=======
        $product = Products::where('slug',$slug)->enabled()->firstOrFail();
		return view('products.plan')->with('data', $product);
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getMenu($slug)
    {
        $data            = Products::where('slug', $slug)->enabled()->firstOrFail();
        $menu_products   = $data->menu()->with('photos')->enabled()->top()->get();
<<<<<<< HEAD
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
=======
        $menu_categories = $this->getMenuCategories();

        return view('products.menu')->with(compact('data', 'menu_products', 'menu_categories'));
    }

    public function getMenuCategories()
    {
        $query1 = MenuCategories::enabled()
            ->whereHas('children', function($q){
                $q->whereHas('menu_products', function($q2){
                    $q2->enabled();
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                });
            });

        return MenuCategories::root()
            ->doesntHave('children')
<<<<<<< HEAD
            ->whereHas('menu_products', function($q) use ($product_id){
                $q->enabled()->where('product_id', $product_id);
=======
            ->whereHas('menu_products', function($q){
                $q->enabled();
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
            })
            ->union($query1)
            ->get();
    }

    public function getMenuProducts($slug, $slug_menu)
    {
        $data            = Products::where('slug', $slug)->enabled()->firstOrFail();
        $cur_cat         = MenuCategories::where('slug', $slug_menu)->firstOrFail();
        $menu_products   = $data->menu()->enabled()->where('category_id', $cur_cat->id)->get();
<<<<<<< HEAD
        $menu_categories = $this->getMenuCategories($data->id);
        return $this->getData($slug, 'products.menu')->with(compact('menu_products', 'menu_categories', 'cur_cat'));
=======
        $menu_categories = $this->getMenuCategories();
        return view('products.menu')->with(compact('data', 'menu_products', 'menu_categories', 'cur_cat'));
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getInterier($slug)
    {
<<<<<<< HEAD
        return $this->getData($slug, 'products.interier');
    }

    public function getCart()
    {
        return view('products.cart');
=======
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();

        return view('products.interier')->with('data', $product);
    }

    public function getCard()
    {
        return view('products.card');
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getReservation($slug)
    {
<<<<<<< HEAD
        return $this->getData($slug, 'products.reservation');
=======
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.reservation')->with('data', $product);
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getPromo($slug)
    {
<<<<<<< HEAD
        return $this->getData($slug, 'products.promo');
=======
        $product = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
        return view('products.promo')->with('data',$product);
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

    public function getGallery($slug, $name)
    {
        $data    = Products::where('slug',  $slug)->where('enabled', true)->firstOrFail();
        $gallery = Galleries::where('slug', $name)->where('enabled', true)->firstOrFail();
        $gallery->increment('views');

        //get related galleries
        $related = $data->galleries()->where('galleries.id','<>',$gallery->id)->limit(5)->get();

<<<<<<< HEAD
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
=======
        return view('products.gallery')->with(compact('data', 'gallery', 'related'));
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }

}
