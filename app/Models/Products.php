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

	public function contacts(){
		return $this->belongsToMany('App\Models\Contacts', 'products_contacts', 'product_id', 'contact_id')->withPivot(['name','name_ro','name_en']);
	}

	public function hallplan(){
		return $this->hasMany('App\Models\Photos', 'table_id')->where('table', 'hall_plan')->orderBy('sort');
	}

	public function menu(){
		return $this->hasMany('App\Models\MenuProducts', 'product_id');
	}

	public function getContactsArray(){
		$return = null;
		foreach($this->contacts as $contact){
			$return[$contact->id] = $contact->pivot;
		}
		return $return;
	}

	public function getMapAttribute()
	{
		return json_decode( $this->attributes['map'] );
	}

	public function setMapAttribute( $val )
	{
		$this->attributes['map'] = json_encode( $val );
	}

}
