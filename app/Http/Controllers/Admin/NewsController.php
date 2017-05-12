<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use App\Models\News;
use App\Models\Tags;
use App\Models\Types;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Validator;

class NewsController extends Controller
{
    public function index(){
        $data     = News::all();
        return view('admin.news.index')->with(compact('data'));
    }

    public function create(){
        $tags     = Tags::all();
        $types    = Types::lists('name','id')->toArray();
        $seltypes = [1]; //default - news
        return view('admin.news.edit')->with(compact('tags', 'types', 'seltypes'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name'          => 'required',
            'slug'          => 'required|unique:news',
            'chosentypes'   => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->messages()
            ]);
        }

        return $this->save($request);
    }

    private function save(Request $request, $id = null){
        // store
        if (!isset($id)) {
            $data = new News();
        }else{
            $data = News::find($id);
        }

        $data->name              = $request->name;
        $data->top               = $request->top;
        $data->created_at        = $request->date;
        $data->slug              = $request->slug;
        $data->description       = $request->description;
        $data->description_short = $request->description_short;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;
        $data->save();

        //tags
        if ($request->chosencat) {
            $data->tags()->sync($request->chosencat);
        }else{
            $data->tags()->detach();
        }

        //types
        if ($request->chosentypes) {
            $data->types()->sync($request->chosentypes);
        }

        $this->UpdatePhotos($request, $data->id);

        return response()->json([
            'success' => true,
            'data'    => ['table' => 'news', 'id' => $data->id, 'name' => $data->name]
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data     = News::find($id);
        $tags     = Tags::all();
        $types    = Types::lists('name','id')->toArray();
        $seltypes = $data->types->pluck('id')->toArray();
        return view('admin.news.edit')->with(compact('data','tags','types', 'seltypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'          => 'required',
            'slug'          => 'required|unique:news,id,{$id}',
            'chosentypes'   => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->messages()
            ]);
        }

        return $this->save($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $news = News::find($id);
        $news->tags()->detach();
        $news->types()->detach();
        $news->products()->detach();
        News::destroy($id);
        if (!$request->ajax()){
            Session::flash('message', trans('common.deleted'));
            return back();
        }else{
            return response()->json(['success' => 'true']);
        }
    }

}
