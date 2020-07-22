<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use App\Models\Product;


class carrinhoController extends Controller
{

    // Função que exibe tudo no carrinho
    public function index(Request $request) {
        $produtos = ShoppingCart::all();
        return view('shoppingCart',['produtos'=>$produtos]);
    }

    public function exibir(Request $request){
            //$request->session()->flush();
        if($request->session()->has("carrinho")){
            $carrinho = $request->session()->get("carrinho");
            $produtos=[];

       foreach($carrinho as $item){           
            $produto = Product::find($item['product_id']);  

            $item['name'] = $produto->name;
            $item['photo'] = $produto->photo;
            // $item['produto_status'] = $produto->produto_status;
            $item['sale_price'] = $produto->sale_price;
            $produtos[] = $item;       
            }        
            return view('shoppingCart',["produtos" => $produtos]);
        } else 
        {
            return view('shoppingCart',["produtos" => []]);
        }
        }


    public function adicionar(Request $request, $id){
    //    dd(Product::find($id));            
       
       if(Product::find($id) == null) {
            return "produto nao existe";
        }            
            
        if(!$request->session()->has("carrinho")){
            $request->session()->put('carrinho', [
                    [
                        'product_id'     => $id,
                        'qty'             => 1,
                    ]
                ]);
                
                return redirect('/exibir');
            }            
            
            $carrinho = $request->session()->get("carrinho");
            //>=0 || ==true

            if(($key = array_search($id, array_column($carrinho, 'product_id')))!== false){                
                $carrinho[$key]['qty']++;
                $request->session()->put("carrinho",$carrinho);
                return redirect('/exibir');
            }           
            
            $carrinho = $request->session()->get("carrinho");
           $carrinho[]= [
               "product_id" => $id,
               "qty" => 1
           ];           
           
           $request->session()->put("carrinho",$carrinho);
           return redirect('/exibir');
    }


    public function remover(Request $request,$id){        
        
        $carrinho = $request->session()->get("carrinho");        
        
        if($carrinho == null || count($carrinho) == 0){
            return redirect('/exibir');
        }        //procurando o id dentro da array carrinho
        $key = array_search($id, array_column($carrinho, 'product_id'));       
        unset($carrinho[$key]); 
        $request->session()->put("carrinho",$carrinho);        
        return redirect('/exibir');    
        }


        public function finalizarCompra(Request $request){        
            if($request->session()->has('carrinho')){            
                $carrinho = $request->session()->get('carrinho');            
                $user = Auth::user();            
                $novaCompra = new Compra();

            $novaCompra->fk_idCliente = $user->id;
            $novaCompra->save();            
            
            foreach($carrinho as $produto){
                $novoItemCompra = new Item();
                $novoItemCompra->nome_item = 'bug';
                $novoItemCompra->valor_unitario = 10;
                $novoItemCompra->numero_item = $produto["qty"];
                $novoItemCompra->fk_idCompra = $novaCompra->idCompra;
                $novoItemCompra->save();
            }            
            
            $request->session ()->flush();
            return redirect('/');           
            } else {                
                $carrinho = [];
                $request->session()->put('carrinho', $carrinho);
                return redirect('/shoppingCart');           
            }
        }
}