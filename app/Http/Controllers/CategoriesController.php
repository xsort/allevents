<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Categories;

class CategoriesController extends Controller
{

    public function getCategoriesList()
    {
	    $categories = Categories::where('top',false)->get(); 
		return view('products.all-categories')->with('data',$categories);
    }

}
