<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use App\Models\newsletters;

class NewslettersController extends Controller
{

    public function submitNewsletters(Request $request){
        if($request->isMethod('POST')){
            $submit = new newsletters();
            $submit->email = $request->emailnewsletter;
            $submit->save();
            return view('pages.newsletters', ['email'=>$submit->email]);
        }

    }
}
