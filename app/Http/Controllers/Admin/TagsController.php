<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TagsController extends Controller
{
    public function index(){
        $data = Tags::all();
        return view('admin.tags.index')->with(compact('data'));
    }

    public function create(){
        return view('admin.tags.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:tags'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
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

    public function edit($id){
        $data = Tags::find($id);

        return view('admin.tags.edit')->with(compact('data'));
    }

    public function save(Request $request, $id){

        $data = Tags::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'top'  => ($request->top == 1) ? 1 : 0,
            'slug' => $request->slug
        ]);

        $this->UpdatePhotos($request, $data->id);

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/tags');
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
            'name'           => 'required',
            'slug'           => 'required|unique:tags,id,{$id}'
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
        Tags::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();

    }
}