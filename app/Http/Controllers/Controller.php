<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\News;
use App\Models\Tags;
use App\Models\Translations;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Controller constructor.
     */
    public function __construct()
    {

    }

    public function UpdatePhotos(Request $request, $id){
        $pc = new Admin\PhotosController;
        $pc->UpdatePhotos($request, $id);
    }
}
