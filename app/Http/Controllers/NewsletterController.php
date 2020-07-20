<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use App\Models\Newsletter;

class NewsletterController extends Controller
{

    public function registerNewsletter(Request $request){
        if($request->isMethod('POST')){

            $email = $request->emailnewsletter;

            $verifica = Newsletter::where('email', '=', $email)->first();

            if ($verifica != null){ 
                return view('pages.newsletter', ['email'=>$email, 'exists'=>true, 'id'=>$verifica->id]);
            } else {

                $register = new Newsletter();
                $register->email = $email;
                $register->save();
                return view('pages.newsletter', ['email'=>$register->email, 'exists'=>false]);
            }
        } 

    }

    public function outNewsletter(Request $request, $id){

        $email = Newsletter::find($id);
        $email->email;
        $email->delete();
        
        return view('pages.outnewsletter', ['email'=> $email]);
        
    }
}
