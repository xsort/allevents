<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galleries;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class GalleriesController extends Controller
{
    public function index(){
        $data = Galleries::all();
        return view('admin.galleries.index')->with(compact('data'));
    }

    public function create(){
        return view('admin.galleries.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:galleries'
        );

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
            $data = new Galleries();
        }else{
            $data = Galleries::find($id);
        }

        $data->name              = $request->name;
        $data->created_at        = $request->date;
        $data->slug              = $request->slug;
        $data->description       = $request->description;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;
        $data->save();

        $this->UpdatePhotos($request, $data->id);

        return response()->json([
            'success' => true,
            'data'    => ['table' => 'galleries', 'id' => $data->id, 'name' => $data->name]
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
        $data = Galleries::find($id);
        return view('admin.galleries.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:galleries,id,{$id}'
        );

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
    public function destroy($id)
    {
        return response()->json([
            'success' => true,
            'data'    => null
        ]);
    }
}
