<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuCategories;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuCategoriesController extends Controller
{
    public function index(){
        $data = MenuCategories::all();
        return view('admin.menu.categories.index')->with(compact('data'));
    }

    public function create(){
        $categories = MenuCategories::lists('name','id')->toArray();
        return view('admin.menu.categories.edit')->with('categories', $categories);

    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:menu_categories'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
    }

    private function save(Request $request, $id){
        // store
        if (!isset($id)) {
            $data = new MenuCategories();
        }else{
            $data = MenuCategories::find($id);
        }

        $data->name              = $request->name;
        $data->slug              = $request->slug;
        $data->description       = $request->description;
        $data->created_at        = $request->date;
        $data->title             = $request->title;
        $data->meta_keywords     = $request->meta_keywords;
        $data->meta_description  = $request->meta_description;
        $data->title             = $request->title;
        $data->parent_id         = $request->parent_id;
        $data->save();

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/menucategories');
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

        $categories = MenuCategories::lists('name','id')->toArray();
        $data       = MenuCategories::find($id);

        return view('admin.menu.categories.edit')->with(compact('data', 'categories'));
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
            'slug'          => 'required|unique:menu_categories,id,{$id}'
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
        MenuCategories::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }
}
