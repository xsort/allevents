<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class BaseModel extends Model
{
    protected   $dateFormat = 'd-m-Y';

    public function getCreatedAtAttribute($date)
    {
        return Date::parse($date)->format($this->dateFormat);
    }

    public function setCreatedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    /**
     * Create the slug from the title
     */
    public function setSlugAttribute($value) {
        if ($value == "") {
            // grab the title and slugify it
            $this->attributes['slug'] = str_slug($this->name);
        }else{
            $this->attributes['slug'] = str_slug($value);
        }
    }
    
    public function getSlugAttribute($value) {
        
        $lang = "";
        if ($lang == "ro") return "ro/".$value;
        if ($lang == "en") return "en/".$value;
        return $value;
        
    }
    
    public function setMetaAttribute($value) {
        
/*
        $lang = "";
        if ($lang == "ro") return "ro/".$value;
        if ($lang == "en") return "en/".$value;
        return $value;
*/
        
    }

    public function setUpdatedAtAttribute($value)
    {
        $this->attributes['updated_at'] = Carbon::now();
    }

    public function getUpdatedAtAttribute($date)
    {
        return Date::parse($date)->format($this->dateFormat);
    }

    public function photos(){
        return $this->hasMany('App\Models\Photos','table_id')->where('table', $this->getTable());
    }
    
    public function meta(){
        return $this->hasOne('App\Models\Meta','table_id')->where('table', $this->getTable());
    }
}
