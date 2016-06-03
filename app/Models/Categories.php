<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends BaseModel
{

    public function children() {
	    return $this->belongsToMany('App\Models\Categories', 'categories_xref', 'parent_id', 'child_id');
    }
}
