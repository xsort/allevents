<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Support\Facades\Session;
use App\Models\Categories;


class ProductsController extends Controller
{
    public function index(){
        $data = Products::all();
        return view('admin.products.index')->with(compact('data'));
    }

    public function create(){
        $categories = Categories::lists('name','id')->toArray();
        return view('admin.products.edit')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'slug'          => 'required|unique:products'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
    }

    private function save(Request $request, $id){
        // store
        if (!isset($id)) {
            $data = new Products();
        }else{
            $data = Products::find($id);
        }
		//dd($request);

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
        
        $this->UpdatePhotos($request, $data->id);
        
        //categories
        if ($request->parent) {
            $data->parents()->sync($request->parent);
        }

        //galleries
        if ($request->galleries) {
            $pivot = [];
            foreach($request->galleries as $gallery_id){
                $pivot[$gallery_id] = ['table' => 'products'];
            }
            $data->galleries()->sync($pivot);
        }

        //videos
        if ($request->videos) {
            $pivot = [];
            foreach($request->videos as $video_id){
                $pivot[$video_id] = ['table' => 'products'];
            }
            $data->videos()->sync($pivot);
        }

        //news
        if ($request->news) {
            $data->news()->sync($request->news);
        }

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/products');
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
        $data           = Products::find($id);
        $categories     = Categories::lists('name','id')->toArray();
        $parents        = $data->parents->pluck('id')->toArray();
        return view('admin.products.edit')->with('data', $data)->with('categories', $categories)->with('parents',$parents);
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
            'slug'          => 'required|unique:products,id,{$id}'
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
        Products::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }
}
