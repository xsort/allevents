<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends BaseModel
{
    /**
     * Many to Many relation
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags');
    }

    /**
     * Many to Many relation
     */
    public function types()
    {
        return $this->belongsToMany('App\Models\Types');
    }

    public function getTagsIdsArray(){
        return $this->tags->pluck('id')->toArray();
    }

    public function setTopAttribute($value)
    {
        if (!isset($value)) $value = false;

        $this->attributes['top'] = $value;
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Products', 'products_news');
    }

    public function scopeNews($query)
    {
        return $query->whereHas('types', function($q){
            $q->where('types.id', 1); //only news
        });
    }

    public function scopeReports($query)
    {
        return $query->whereHas('types', function($q){
            $q->where('types.id', 2); //only reports
        });
    }

    public function scopePromo($query)
    {
        return $query->whereHas('types', function($q){
            $q->where('types.id', 3); //only promo
        });
    }

    public function scopeVisible($query){
        return $query->where('enabled', true);
    }

}
