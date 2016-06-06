<?php

namespace App\Http\Controllers\admin;

use App\Models\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    public function index(){
        $data = Categories::all();
        return view('admin.categories.index')->with(compact('data'));
    }

    public function create(){
        return view('admin.categories.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:categories'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
    }

    private function save(Request $request, $id){
        // store
        if (!isset($id)) {
            $data = new Categories();
        }else{
            $data = Categories::find($id);
        }

        $data->name              = $request->name;
        $data->slug              = $request->slug;
        //$data->description       = $request->description;
        //$data->title             = $request->title;
        //$data->meta_keywords     = $request->meta_keywords;
        //$data->meta_description  = $request->meta_description;
        $data->save();



        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/categories');
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
        $data = Categories::find($id);
        return view('admin.categories.edit')->with(compact('data'));
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
            'slug'          => 'required|unique:categories,id,{$id}'
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
