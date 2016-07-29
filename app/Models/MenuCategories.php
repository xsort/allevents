<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategories extends BaseModel
{
    public function children() {
        return $this->hasMany('App\Models\MenuCategories', 'parent_id');
    }
}
