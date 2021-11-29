<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{   
    public function printData(){
        return '<h1>HolitaMundito</h1>';
    }

    public function postName(Request $request){
        $res = ["name"=>$request->name,"message"=>$request->message, "tel"=>$request->tel, "email"=>$request->email];
        
        Contact::create([
            'name'=>$request->name,
            'mail'=>$request->email,
            'tel'=>$request->tel, 
            'message'=>$request->message
        ]);
        \Mail::to($request->email)->send(new \App\Mail\sendContact($res));
        return $res;
    }
}
