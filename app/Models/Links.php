<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Links extends BaseModel
{
    public $timestamps  =  false;

    public static function getLinksMenu($product_id)
    {
        //check custom object menu
        $links = Products::find($product_id)
            ->links()
            ->with('photos')
            ->orderBy('type')
            ->orderBy('sort')
            ->get();

        if (count($links) == 0){
            return self::getDefaultMenu();
        }
        
        $menu = [];
        foreach($links as $link){
            $menu['type' . $link->pivot->type][] = $link;
        }

        return $menu;
    }

    private static function getDefaultMenu()
    {
        $defaultMenuArray = config('allevents.menu');
        $whereIn = [];
        foreach($defaultMenuArray as $type){
            foreach($type as $item) {
                $whereIn[] = $item;
            }
        }

        $data = self::whereIn('id', array_unique($whereIn))->with('photos')->get();

        $arrayOfCollections = [];
        foreach($data as $item){
            $arrayOfCollections[$item->id] = $item;
        }

        foreach ($defaultMenuArray as $key=>$type) {
            foreach ($type as $index=>$value) {
                if (isset($arrayOfCollections[$value])){
                    $link = $arrayOfCollections[$value];
                }else{
                    $link = null;
                }
                $defaultMenuArray[$key][$index] = $link;
            }
        }

        return $defaultMenuArray;
    }

    public function getUrl($slug)
    {
        if(isset($this->pivot) && $this->pivot->disabled){
            return "";
        }

        $locale = "";
        if (App::getLocale() != config('app.fallback_locale')){
            $locale = App::getLocale();
        }

        switch ($this->type){
            case 0:  //inner object link
                return $locale . '/' . $slug . '/' . $this->link;
                break;
            case 1:  //inner link
                return $locale . '/' . $this->link;
                break;
            default: //outer link
                return $this->link;
        }
    }
}
