<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class Translations extends Model
{
    public $timestamps  =  false;

    public function getValueAttribute()
    {
        $locale = Lang::locale();
        if ($locale != "ru"){
            if (isset($this->attributes['value_' . $locale]))
                return $this->attributes['value_' . $locale];
        }
        return $this->attributes['value'];
    }

    public function setValueAttribute($values)
    {
        foreach($values as $key=>$value){
            if ($key == "ru") {
                $this->attributes['value'] = $value;
                continue;
            }
            $this->attributes['value_' . $key] = $value;
        }
    }
}
