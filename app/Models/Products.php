<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends BaseModel
{
	public function parents() {
	    return $this->belongsToMany('App\Models\Categories', 'products_categories',  'products_id', 'categories_id');
    }

	public function news(){
		return $this->belongsToMany('App\Models\News', 'products_news');
	}
}
