<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdegaController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function product(){
        return view('product');
    }

    public function products(){
        return view('products');
    }

    public function shoppingCart(){
        return view('shoppingCart');
    }

    public function panel(){
        return view('panel.main');
    }

    public function orders(){
        return view('panel.orders');
    }

    public function address(){
        return view('panel.address');
    }

    public function address_edit(){
        return view('panel.address_edit');
    }

    public function account_edit(){
        return view('panel.account_edit');
    }


}
