<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\stockProducts;

class IndexController extends Controller
{
    public function index() {

        $wines = Product::join('stock_products', 'products.id', '=', 'stock_products.products_id')
                            ->select('name', 'photo', 'sale_price', 'categories_id')
                            ->where('amount', '>', 0)->where('categories_id', '=', 1)
                            ->get();
                            
        $beers = Product::join('stock_products', 'products.id', '=', 'stock_products.products_id')
                            ->select('name', 'photo', 'sale_price', 'categories_id')
                            ->where('amount', '>', 0)->where('categories_id', '=', 2)
                            ->get();

        $distillates = Product::join('stock_products', 'products.id', '=', 'stock_products.products_id')
                            ->select('name', 'photo', 'sale_price', 'categories_id')
                            ->where('amount', '>', 0)->where('categories_id', '=', 3)
                            ->get();

        $nonAlcoholics = Product::join('stock_products', 'products.id', '=', 'stock_products.products_id')
                            ->select('name', 'photo', 'sale_price', 'categories_id')
                            ->where('amount', '>', 0)->where('categories_id', '=', 4)
                            ->get();


        // select('name','sale_price')->where('featured', '=', 1)->get();

        // $pedidos = User::select('orders.id as orders_id', 'date', 'state')
        //                 ->where('users.id', $id)
        //                 ->join('orders', 'users.id', '=', 'orders.users_id')
        //                 ->join('status', 'status.id', '=', 'orders.status_id')
        //                 ->orderBy('date', 'desc')
        //                 ->get();
        // dd();
          return view('index', compact('wines', 'beers', 'distillates', 'nonAlcoholics'));
     }

    public function product($id = null) {
        if (!empty($id)) {
            $registro = Product::where([
                'id' => $id,
                'amount' > 0
            ])->first();

            if (!empty($registro)) {
                return view('index', compact('registro'));
            }
            
        }
        return redirect()->route('index');
    }
}
