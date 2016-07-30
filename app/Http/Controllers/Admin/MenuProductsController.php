<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuCategories;
use App\Models\MenuProducts;
use App\Models\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuProductsController extends Controller
{
    public function index($id){

        $product    = Products::find($id);
        $data       = $product->menu;
        return view('admin.menu.index')->with(compact('data', 'product'));
    }

    public function create($id){
        $product    = Products::find($id);
        $categories = MenuCategories::lists('name', 'id')->toArray();
        return view('admin.menu.edit')->with(compact('categories', 'product'));
    }

    public function store(Request $request, $id)
    {
        $rules = array(
            'name'          => 'required'
        );

        $this->validate($request, $rules);

        return $this->save($request, $id);
    }

    private function save(Request $request, $product_id, $id = null){
        // store
        if (!isset($id)) {
            $data = new MenuProducts();
        }else{
            $data = MenuProducts::find($id);
        }

        $data->name              = $request->name;
        $data->created_at        = $request->date;
        $data->description       = $request->description;
        $data->price             = $request->price;
        $data->product_id        = $product_id;
        $data->category_id       = $request->category_id;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;

        $data->save();

        $this->UpdatePhotos($request, $data->id);

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect()->route('admin.menu', $product_id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data       = MenuProducts::find($id);
        $categories = MenuCategories::lists('name','id')->toArray();
        $product    = Products::find($data->product_id);

        return view('admin.menu.edit')->with(compact('data', 'categories', 'product'));



        //$parents = $data->parents->pluck('id')->toArray();
        //return view('admin.categories.edit')->with('data', $data)->with('categories', $categories)->with('parents',$parents);
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
            'name'          => 'required'
        );

        $this->validate($request, $rules);

        $data       = MenuProducts::find($id);

        return $this->save($request, $data->product_id, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        MenuProducts::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }

}
