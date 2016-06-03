<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
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
    
    public function setMetaDescriptionAttribute($values) {
        $table    = $this->getTable();
        $table_id = $this->id;

        $meta = Meta::where('table', $table)->where('table_id',$table_id)->first();
        if (!isset($meta)){
            $meta = new Meta();
        }
        foreach($values as $key=>$value){
            if ($key == "ru"){
                $meta->attributes['meta_description'] = $value;
            }else{
                $meta->attributes['meta_description_'.$key] = $value;
            }
        }
        $meta->table            = $table;
        $meta->table_id         = $table_id;
        $meta->save();
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
