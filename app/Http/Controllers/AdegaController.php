<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdegaController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function shoppingCart(){
        return view('shoppingCart');
    }

    public function deliveryway(){
        return view('deliveryway');
    }

    public function returnOrder()
    {
        return view('returnOrder');
    }




    public function busca(Request $request){

        $search = $request->search;

        if($search == ""){
            return redirect('/');
        }

        $mecanismo = Product::where('name', 'LIKE', '%'.$search.'%')->get();

        return view('pages.busca',['list'=>$mecanismo, 'pesquisa' => $search]);
    }


}
