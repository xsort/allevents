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
	    $categories = Categories::lists('name','id')->toArray();
        return view('admin.categories.edit')->with('categories', $categories);
        
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
        $data->description       = $request->description;
        $data->created_at        = $request->date;
        $data->title             = $request->title;
        $data->meta_keywords     = $request->meta_keywords;
        $data->meta_description  = $request->meta_description;
        $data->title             = $request->title;
        $data->top              = $request->top;
        $data->save();

        $this->UpdatePhotos($request, $data->id);
        
        
        //categories
        if ($request->parent) {
            $data->parents()->sync($request->parent);
        }
        
        

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
	    
	    $categories = Categories::lists('name','id')->toArray();
        $data = Categories::find($id);
        $parents = $data->parents->pluck('id')->toArray();
        return view('admin.categories.edit')->with('data', $data)->with('categories', $categories)->with('parents',$parents);
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
