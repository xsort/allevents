<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * Many to Many relation
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags');
    }

}
