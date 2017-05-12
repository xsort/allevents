<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Links;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LinksController extends Controller
{
    public function index()
    {
        $data = Links::where('product_id', 0)->get();
        return view('admin.links.index')->with(compact('data'));
    }

    public function create()
    {
        return view('admin.links.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'           => 'required'
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

    public function edit($id)
    {
        $data = Links::find($id);
        return view('admin.links.edit')->with(compact('data'));
    }

    public function save(Request $request, $id)
    {
        if (!isset($id)) {
	        $data = new Links();
        }else{
            $data = Links::find($id);
        }

        $data->name               = $request->name;
        $data->description_short  = $request->description_short;
        $data->link               = $request->link;
        $data->type               = $request->type;

        $data->save();

        $this->UpdatePhotos($request, $data->id);

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/links');
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
            'name'           => 'required'
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
        Links::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();

    }

    public function getCustomLink(Request $request, $id)
    {
        $view = view('admin.links.edit-modal')->with('product_id', $id);
        $link_id = $request->link_id;
        if (isset($link_id)){
            $data = Links::find($link_id);
            $view->with(compact('data'));
        }
        return $view;
    }

    public function postCustomLink(Request $request, $id)
    {
        $link_id = $request->link_id;
        if ($link_id == 0) {
            $task = 'new';
            $data = new Links();
        }else{
            $task = 'edit';
            $data = Links::find($link_id);
        }

        $data->name               = $request->name;
        $data->description_short  = $request->description_short;
        $data->link               = $request->link;
        $data->blank              = (isset($request->blank) ? $request->blank : false);
        $data->type               = $request->type;
        $data->product_id         = $id;

        $data->save();

        $this->UpdatePhotos($request, $data->id);

        return response()->json([
            'success' => true,
            'data'    => ['task' => $task, 'id' => $data->id, 'name' => $data->name]
        ]);
    }

    public function getRelations($id)
    {
        $product = Products::find($id);

        //основные ссылки и ссылки для данного объекта
        $links = Links::whereIn('product_id', [0, $id])->orderBy('product_id')->get();

        //ссылки, связанные с данным объектом
        $relations = Links::getLinksMenu($product->id);

        return view('admin.links.relations')->with(compact('product', 'links', 'relations'));
    }

    public function storeRelations(Request $request, $id)
    {
        $data    = $request->data;
        $product = Products::find($id);

        foreach($data as $type => $array){
            $type = substr($type, -1);
            $sync = [];
            foreach($array as $key => $value) {
                $disabled   = ($value['disabled'] == 'true') ? 1 : 0;
                $sync[$key] = ['disabled' => $disabled, 'type' => $type, 'sort' => $value['sort']];
            }
            $product->links()->wherePivot('type', $type)->sync($sync, true);
        }

        return response()->json([
            'success' => true
        ]);
    }
}