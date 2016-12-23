<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuProducts extends BaseModel
{
    public function parent(){
        return $this->hasOne('App\Models\Products', 'id', 'product_id');
    }
}
