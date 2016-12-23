<?php

namespace App\Http\Controllers;

use App\Models\MenuProducts;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

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

    public function reservation(Request $request){
        Mail::send('emails.make-event', ['name' => $request->name, 'phone' => $request->phone, 'text'=>$request->text], function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Резервация заведения');
        });
    }
}
