<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public $timestamps  =   false;

    public function getThumbs(){
        
        $photos = $this->photos();
        $thumbs = array();
        foreach ($photos as $photo){
            $thumbs[] = $photo->source;
        }
        return $thumbs;
       
    }
}
