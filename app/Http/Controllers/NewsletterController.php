<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use App\Models\Newsletter;

class NewsletterController extends Controller
{

    public function registerNewsletter(Request $request){
        if($request->isMethod('POST')){
            $register = new Newsletter();
            $register->email = $request->emailnewsletter;
            $register->save();
            return view('pages.newsletter', ['email'=>$register->email]);
        }

    }
}
