<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function getPhotos()

    {
		return view('products.product-photo');
    }

        public function getVideos()
    {
		return view('products.product-video');
    }
    	public function getPlan()
      {
		return view('products.product-plan');
    }

        	public function getMenu()
      {
		return view('products.products-menu');
    }


}
