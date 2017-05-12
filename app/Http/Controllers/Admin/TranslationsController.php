<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reviews;
use App\Models\Translations;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class TranslationsController extends Controller
{
    public function index(){
        $data = Translations::all();
        return view('admin.translations.index')->with(compact('data'));
    }

    public function create(){
        return view('admin.translations.edit');
    }

    public function store(Request $request)
    {
        $rules = array(
            'key'          => 'required|unique:translations'
        );

        $this->validate($request, $rules);

        return $this->save($request);
    }

    private function save(Request $request, $id = null){
        // store
        if (!isset($id)) {
            $data = new Translations();
        }else{
            $data = Translations::find($id);
        }

        $data->key   = $request->key;
        $data->value = $request->value;

        $data->save();

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/translations');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data       = Translations::find($id);
        return view('admin.translations.edit')->with(compact('data'));
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
            'key'          => 'required'
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
        Translations::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }

}
