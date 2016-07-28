<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Validator;

class VideosController extends Controller
{
    public function index(){
        $data = Videos::all();
        return view('admin.videos.index')->with(compact('data'));
    }

    public function create(){
        return view('admin.videos.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'source'        => 'required'
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
            $data = new Videos();
        }else{
            $data = Videos::find($id);
        }

        $data->name              = $request->name;
        $data->created_at        = $request->date;
        $data->source            = $request->source;
        $data->description       = $request->description;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;

        $data->save();

        return response()->json([
            'success' => true,
            'data'    => ['table' => 'videos', 'id' => $data->id, 'name' => $data->name]
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
        $data = Videos::find($id);
        return view('admin.videos.edit')->with('data',$data);

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
            'source'        => 'required'
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
        Videos::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }
}
