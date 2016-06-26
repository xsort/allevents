<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Tags;


class JsonController extends Controller
{
    private function json_response($errors = null, $data = null){
        if (!is_null($errors) && count($errors) > 0){
            return response()->json(['success' => 'false', 'data' => $errors]);
        }
        return response()->json(['success'=>'true', 'data'=>$data]);
    }

    public function getChangevisibility(Request $request){
        $id    = $request->id;
        $model = $request->model;

        $NamespacedModel = '\\App\\Models\\' . ucfirst($model);
        $data            = $NamespacedModel::find($id);
        $data->enabled   = ($data->enabled ? false : true);
        $data->save();
        return $this->json_response();
    }
    
    public function getAddtag(Request $request){
       $value  = $request->value;

        $existed = Tags::where('name', $value)->count();
        if ($existed != 0){
            $errors = ['Уже существует'];
            return $this->json_response($errors);
        }

        $tag        = new Tags();
        $tag->name  = $value;
        $tag->save();
        return $this->json_response(null, $tag->id);
    }
}
