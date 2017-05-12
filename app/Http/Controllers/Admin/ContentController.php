<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helper;
use App\Models\Content;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContentController extends Controller
{
    public function index(){
        $data = Content::all();
        return view('admin.content.index')->with(compact('data'));
    }

    public function create(){
        return view('admin.content.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:content'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
    }

    private function save(Request $request, $id){
        // store
        if (!isset($id)) {
            $content = new Content();
        }else{
            $content = Content::find($id);
        }

        $content->name              = $request->name;
        $content->enabled           = $request->enabled;
        $content->created_at        = $request->date;
        $content->slug              = $request->slug;
        $content->description       = $request->description;
        $content->meta_description  = $request->meta_description;
        $content->meta_keywords     = $request->meta_keywords;
        $content->title             = $request->title;
        $content->save();

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/content');
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
        $data = Content::find($id);
        return view('admin.content.edit')->with(compact('data'));
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
            'slug'          => 'required|unique:content,id,{$id}'
        );

        $this->validate($request, $rules);

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
        Content::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }

}
