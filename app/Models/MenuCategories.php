<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategories extends BaseModel
{
    public function children()
    {
        return $this->hasMany('App\Models\MenuCategories', 'parent_id');
    }

    public function menu_products(){
        return $this->hasMany('App\Models\MenuProducts', 'category_id');
    }

    public function scopeRoot($query)
    {
        return $query->where('parent_id', 0);
    }
}
