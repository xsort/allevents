<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helper;
use App\Models\Content;
use App\Models\Photos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    protected $files_location;
    protected $images_url;
    protected $thumb_width;
    protected $thumb_height;
    protected $width;
    protected $height;

    function __construct()
    {
        $this->files_location   = base_path() . "/" . Config::get('photos.images_dir');
        $this->images_url       = Config::get('photos.images_url');
        $this->width            = Config::get('photos.width');
        $this->height           = Config::get('photos.height');
        $this->thumb_width      = Config::get('photos.thumb_width');
        $this->thumb_height     = Config::get('photos.thumb_height');
    }
    
    public function destroy($id)
    {
        Photos::destroy($id);
        Session::flash('message', trans('common.deleted'));
        //return back();
    }

    public function upload()
    {
        // sanity check
        if (!Input::hasFile('Filedata')) {
            // there ws no uploded file
            return response()->json(['success' => 'false', 'data' => 'You must choose a file!']);
        }

        $table = Input::get('table');

        if ($table == '') {
            return response()->json(['success' => 'false', 'data' => 'SELECT TABLE!']);
        }

        $table_id       = Input::get('table_id');
        $file           = Input::file('Filedata');
        $width          = Input::get('width');
        $height         = Input::get('height');
        $thumbs_input   = Input::get('thumbs');
        $valid_thumbs   = array();
        if (isset($thumbs_input))   $valid_thumbs   = explode(",", $thumbs_input);

        if (is_numeric($width))     $this->width        = $width;
        if (is_numeric($height))    $this->height       = $height;

        $extension = $file->getClientOriginalExtension();
        $new_filename = uniqid() . "." . $extension;

        $orig_image = Image::make($file);
        $image      = $orig_image;
        $image->resize($this->width, $this->height, function ($constraint) {
            $constraint->aspectRatio();  //сохранять пропорции
            $constraint->upsize();       //если фото меньше, то не увеличивать
        });
        $image->save($this->files_location . $new_filename);

        //thumb
        $all_thumbs = Config::get('photos.thumbs');

        foreach($all_thumbs as $thumb) {
            if (count($valid_thumbs) > 0 && !in_array($thumb['path'], $valid_thumbs)) continue;
            $thumbPath = $this->files_location . $thumb['path'] . "/";
            if (!File::exists($thumbPath)) {
                File::makeDirectory($thumbPath);
            }
            $image->fit($thumb['width'], $thumb['height']);
            $image->save($thumbPath . $new_filename);
        }
        unset($image);

        $photo              = new Photos;
        $photo->source      = $new_filename;
        $photo->table       = $table;

        if ($table_id != 0){
            $photo->table_id = $table_id;
        }else {
            $photo->token = Session::getId();
        }

        $photo->save();
        $photo_id           = $photo->id;
        $photo->sort        = $photo_id;
        $photo->save();

        return response()->json(['success' => 'true', 'data' => ['filename' => $new_filename, 'path' => $this->images_url, 'id' => $photo_id, 'sort' => $photo->sort]]);

    }

    public function getJSONPhotos(){
        $table    = Input::get('table');
        $table_id = Input::get('table_id');
        $token    = Session::getId();

        $query   = Photos::where('table', $table)->where('table_id', $table_id);
        if ($table_id == 0){
            $query->where('token', $token);
        }
        $rows   = $query->orderBy('sort')->get();
        $photos = array();
        foreach($rows as $r){
            $photos[] = ['filename' => $r['source'], 'path' => $this->images_url, 'id' => $r['id'], 'sort' => $r['sort']];
        }
        return response()->json(['success' => 'true', 'data' => $photos]);
    }

    public function changesort(){
        $a_id   = Input::get('a_id');
        $b_id   = Input::get('b_id');
        $asort = Input::get('asort');
        $bsort = Input::get('bsort');

        $a_photo = Photos::find($a_id);
        $a_photo->sort = $bsort;
        $a_photo->save();

        $b_photo = Photos::find($b_id);
        $b_photo->sort = $asort;
        $b_photo->save();

        return response()->json(['success' => 'true']);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function UpdatePhotos(Request $request, $id){
        if (is_null($request->photos))  return;
        if (!is_numeric($id))           return;

        $photos = Photos::whereIn('id', $request->photos)->get();

        foreach($photos as $photo){
            if ($photo->table_id == 0 || !str_contains($photo->source, "_")){
                $photo->table_id = $id;
                $photo->token = "";
                if ($request->slug){
                    //new photo name
                    $old_name = $photo->source;
                    $new_name = $request->slug . "_" . $photo->id . "." . File::extension($photo->source);
                    $photo->source = $new_name;

                    //rename main image
                    $oldfile = $this->files_location . $old_name;
                    $newfile = $this->files_location . $new_name;
                    File::move($oldfile, $newfile);

                    //reaname thumbs files
                    $all_thumbs = Config::get('photos.thumbs');
                    foreach($all_thumbs as $thumb) {
                        $thumbPath = $this->files_location . $thumb['path'] . "/";
                        $oldfile = $thumbPath . $old_name;
                        $newfile = $thumbPath . $new_name;
                        File::move($oldfile, $newfile);
                    }

                }
                $photo->save();
            }
        }
    }
}
