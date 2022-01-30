<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{  
    /* 
    Develop de red object and de message of success or error
    */

    public function postName(Request $request){

        function mailValidator($mail){
            $mail_helper = explode("@", $mail);
    
            if (count($mail_helper)==2 && strlen($mail_helper[0])>0) {
                $mail_helper = explode(".", $mail_helper[1]);
    
                if (count($mail_helper)>= 2 && isset($mail_helper[0]) && isset($mail_helper[1])
                    && strlen($mail_helper[0])>0 && strlen($mail_helper[1])>1){
    
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        
        if(isset($request['name'], $request['message'], $request['phone'], $request['email']) && mailValidator($request['email'])){
            $res = [
                "name"=>$request['name'],
                "message"=>$request['message'], 
                "tel"=>$request['phone'], 
                "email"=>$request['email']
            ];
            
            Contact::create([
                'name'=>$res['name'],
                'mail'=>$res['email'],
                'tel'=>$res['tel'], 
                'message'=>$res['message']
            ]);
    
            \Mail::to($res['email'])->send(new \App\Mail\sendContact($res));
            
            return (["status"=>201]);

        }else{
            return (["status"=>200]);
        }
    }
}

// isset()
/* 
hola
vladi qlo me hiciste escribir un comentario qlo 

*/
