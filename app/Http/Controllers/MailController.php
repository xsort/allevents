<?php

namespace App\Http\Controllers;

use App\Models\MenuProducts;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use App\Models\User;
=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c

class MailController extends Controller
{
    private $from_mail;
    private $from_name;
    private $to_mail;
    private $to_name;

    public function __construct(){
        $this->from_mail = config('mail.from.address');
        $this->from_name = config('mail.from.name');
        $this->to_mail   = config('mail.to.address');
        $this->to_name   = config('mail.to.name');
    }


    public function sendCard(Request $request){
        $data = [];
        foreach ($request->data as $id => $quantity){
            $product            = MenuProducts::find($id);
            $data[] = [
                        'name'      =>  $product->parent->name . " / " . $product->name,
                        'quantity'  =>  $quantity,
                        'price'     =>  $product->price,
                        'amount'    =>  $quantity * $product->price
                      ];
        }

        $params = [ 'name'      =>  $request->cartName,
                    'email'     =>  $request->cartEmail,
                    'phone'     =>  $request->cartPhone,
                    'address'   =>  $request->cartAdress,
                    'text'      =>  $request->cartMessage,
                    'data'      =>  $data
                  ];

        Mail::send('emails.send-card', $params, function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Корзина с сайта');
        });
    }

    public function makeEvent(Request $request){
        Mail::send('emails.make-event', ['name' => $request->name, 'phone' => $request->phone, 'text'=>$request->text], function ($m) {
            $m->from($this->from_mail, $this->from_name)
                ->to($this->to_mail,   $this->to_name)
                ->subject('Организация эвента');
        });
    }

    public function makeContact(Request $request){
        Mail::send('emails.make-contact', ['name' => $request->name, 'email' => $request->email, 'text'=>$request->text], function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Сообщение обратной связи');
        });
    }

    public function putEvent(Request $request){
        Mail::send('emails.make-event', ['name' => $request->name, 'phone' => $request->phone, 'text'=>$request->text], function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Сообщения об эвенте');
        });
    }

<<<<<<< HEAD
    public function sendEmail(Request $request){
        Mail::send('emails.send-email', ['clientEmail' => $request->clientEmail ], function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Подписка на рассылку');
        });
    }    

=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    public function reservation(Request $request){
        Mail::send('emails.make-event', ['name' => $request->name, 'phone' => $request->phone, 'text'=>$request->text], function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Резервация заведения');
        });
    }
<<<<<<< HEAD

    public function productNotification(Request $request){
        $admin_emails = $request->admin_emails;

        Mail::send('emails.product-notification',
            ['product' => $request->name['ru'],
                'name' => $request->manager_name,
                'email' => $request->manager_email,
                'mobile' => $request->manager_mobile
            ], function ($m) use ($admin_emails) {
                $m->from($this->from_mail, $this->from_name)
                    ->to($admin_emails,   $this->to_name)
                    ->subject('Редактирование объекта');
        });
    }

    public function managerQuestion(Request $request){
        $auth_user = Auth::user();

        $admins = User::where('rights', 1)->get();

        $admin_emails = array();

        // Отправляем письмецо админам
        foreach ($admins as $admin){
            $admin_emails[] = $admin->email;
        }

        Mail::send('emails.manager-question', ['product' => $request->product_name, 'manager_question' =>
            $request->text, 'name' => $auth_user->name, 'email' => $auth_user->email,
            'mobile' => $auth_user->mobile], function ($m) use ($admin_emails) {
            $m->from($this->from_mail, $this->from_name)
                ->to($admin_emails, $this->to_name)
                ->subject('Вопрос от менеджера');
        });
    }
=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
}
