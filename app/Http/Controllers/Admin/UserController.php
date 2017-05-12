<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.users.index')->with(compact('data'));
    }

    public function create(){
        $products = Products::lists('name', 'id')->toArray();
        return view('admin.users.edit')->with(compact('products'));
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'          => 'required',
            'email'         => 'required',
            'open_password' => 'required|alphaNum|min:3'
        );

        $this->validate($request, $rules);

        return $this->save($request, null);
    }

    public function edit($id){
        $data = User::find($id);
        $products = Products::lists('name', 'id')->toArray();
        $user_products = $data->products()->pluck('products.id')->toArray();

        return view('admin.users.edit')->with(compact('data', 'products', 'user_products'));
    }

    public function save(Request $request, $id){

        if (!isset($id)) {
            $data = new User();
        }else{
            $data = User::find($id);
        }

        $data->name                 = $request->name;
        $data->email                = $request->email;
        $data->mobile               = $request->mobile;
        $data->rights               = $request->rights;
        $data->comment              = $request->comment;

        if($request->open_password){
            $data->password         = bcrypt($request->open_password);
            $data->open_password    = $request->open_password;
        }

        $data->save();

        //Объекты
        if ($request->products && !empty($request->products)) {
            $data->products()->sync($request->products);
        }
        else{
            $data->products()->detach();
        }

        // redirect
        Session::flash('message', trans('common.saved'));
        return redirect('admin/users');
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
            'email'          => 'required',
            'open_password'  => 'required|alphaNum|min:3'
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
        $user = User::find($id);
        User::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();

    }
}