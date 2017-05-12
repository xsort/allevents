<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategories extends BaseModel
{
    public function children()
    {
        return $this->hasMany('App\Models\MenuCategories', 'parent_id');
    }

<<<<<<< HEAD
    public function menu_products()
    {
=======
    public function menu_products(){
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
        return $this->hasMany('App\Models\MenuProducts', 'category_id');
    }

    public function scopeRoot($query)
    {
        return $query->where('parent_id', 0);
    }
<<<<<<< HEAD

=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
}
