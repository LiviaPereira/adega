<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\stockProducts;

class IndexController extends Controller
{
    public function index() {
        $products = stockProducts::select()->where('amount','>', 0)->get();
        $featureds = Product::join('stock_products', 'products.id', '=', 'stock_products.products_id')
        ->select('name', 'photo', 'sale_price')->get();
        

      

        // select('name','sale_price')->where('featured', '=', 1)->get();

        // $pedidos = User::select('orders.id as orders_id', 'date', 'state')
        //                 ->where('users.id', $id)
        //                 ->join('orders', 'users.id', '=', 'orders.users_id')
        //                 ->join('status', 'status.id', '=', 'orders.status_id')
        //                 ->orderBy('date', 'desc')
        //                 ->get();
        // dd();
         return view('index', compact('products', 'featureds'));
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
