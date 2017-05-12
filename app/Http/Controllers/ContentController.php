<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Content;

class ContentController extends Controller
{
    public function getBySlug($slug){
        $content = Content::where('slug', $slug)->firstOrFail();
        return view('content')->with($content);
    }
}

//тест от Quick
//test Denisoff
