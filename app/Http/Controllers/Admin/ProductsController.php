<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MailController;
use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{
    public function index(){
        $data = Products::all();
        return view('admin.products.index')->with(compact('data'));
    }

    public function create(){
        $categories = Categories::lists('name','id')->toArray();
        $contacts   = Contacts::all();
        return view('admin.products.edit')->with(compact('categories','contacts'));
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

    private function save(Request $request, $id)
    {
        // store
        if (!isset($id)) {
            $data = new Products();
        }else{
            $data = Products::find($id);
        }


        $data->name              = $request->name;
        $data->top               = ($request->top == 1) ? 1 : 0;
        $data->created_at        = $request->date;
        $data->slug              = $request->slug;
        $data->description       = $request->description;
        $data->description_short = $request->description_short;
        $data->meta_description  = $request->meta_description;
        $data->meta_keywords     = $request->meta_keywords;
        $data->title             = $request->title;
        $data->video             = $request->video;
        $data->map               = $request->map;
        $data->type              = $request->type;
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


        //contacts
        if ($request->contacts){
            $pivot = [];
            foreach($request->contacts as $key => $contact){
                $pivot[$key] = ['name'    => $contact['ru'],
                                'name_ro' => $contact['ro'],
                                'name_en' => $contact['en']];
            }
            $data->contacts()->sync($pivot);
        }

        // redirect
        Session::flash('message', trans('common.saved'));

        if(Auth::user()->isManager()){
            $auth_user = Auth::user();
            $auth_user_product = Auth::user()->products()->find($id);

            // Меняем флажок
            $auth_user_product->pivot->edited = 1;
            $auth_user_product->pivot->save();

            // Заполняем информацию о менеджере отправителе
            $request->manager_name = $auth_user->name;
            $request->manager_email = $auth_user->email;
            $request->manager_mobile = $auth_user->mobile;

            $admins = User::where('rights', 1)->get();

            $admin_emails = array();

            // Отправляем письмецо админам
            foreach ($admins as $admin){
                $admin_emails[] = $admin->email;
            }

            $request->admin_emails = $admin_emails;

            $mail = new MailController();
            $mail->productNotification($request);

            return redirect('admin');
        }
        else {

            // Меняем флажок обратно
                $manager_edited = $data->manager()->first();

            if(isset($manager_edited)) {
                $manager_edited->pivot->edited = 0;
                $manager_edited->pivot->save();
            }

            return redirect('admin/products');
        }
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
        $data              = Products::find($id);
        $categories        = Categories::lists('name','id')->toArray();
        $parents           = $data->parents->pluck('id')->toArray();
        $contacts          = Contacts::all();
        $contacts_values   = $data->getContactsArray();
        $manager_edited    = $data->manager()->first();

        if(Auth::user()->isManager()){
            return view('admin.manager.edit')->with(compact('data', 'categories', 'parents', 'contacts', 'contacts_values'));
        }
        else {
            return view('admin.products.edit')->with(compact('data', 'categories', 'parents', 'contacts', 'contacts_values', 'manager_edited'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->isManager()) {
            $rules = array(
                'name' => 'required'
            );
        }
        else{
            $rules = array(
                'name' => 'required',
                'slug' => 'required|unique:products,id,{$id}'
            );
        }

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
        $product = Products::find($id);
        $product->contacts()->detach();
        $product->parents()->detach();
        Products::destroy($id);
        Session::flash('message', trans('common.deleted'));
        return back();
    }
}
