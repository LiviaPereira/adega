<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function addProduct () {
        return view('createProduct');
    }
}
