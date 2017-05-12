<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuProducts extends BaseModel
{
    public function parent(){
<<<<<<< HEAD
        return $this->hasOne('App\Models\Products', 'id', 'product_id')->withPivot('product_id');
=======
        return $this->hasOne('App\Models\Products', 'id', 'product_id');
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    }
}
