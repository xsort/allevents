<?php

namespace App\Models;

class Tags extends BaseModel
{
    protected $guarded = ['id'];

    /**
     * Many to Many relation
     */
    public function news()
    {
        return $this->belongsToMany('App\Models\News');
    }

    public function background()
    {
        return $this->hasOne('App\Models\Photos', 'table_id')->where('table', 'tags');
    }
}
