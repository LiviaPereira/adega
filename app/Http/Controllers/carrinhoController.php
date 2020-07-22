<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ShoppingCart;


class carrinhoController extends Controller
{

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

            $item['nome_produto'] = $produto->nome_produto;
            $item['imagens'] = $produto->imagens;
            $item['produto_status'] = $produto->produto_status;
            $item['preco_venda'] = $produto->preco_venda;
            $produtos[] = $item;       
            }        
            return view('carrinho',["produtos" => $produtos]);
        } else 
        {
            return view('carrinho',["produtos" => []]);
        }
        }


    public function adicionar(Request $request, $id){
       // dd(Produto::find($id));            
       
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
                
                return redirect('/carrinho/exibir');
            }            
            
            $carrinho = $request->session()->get("carrinho");
            //>=0 || ==true

            if(($key = array_search($id, array_column($carrinho, 'product_id')))!== false){                
                $carrinho[$key]['qty']++;
                $request->session()->put("carrinho",$carrinho);
                return redirect('/carrinho/exibir');
            }           
            
            $carrinho = $request->session()->get("carrinho");
           $carrinho[]= [
               "product_id" => $id,
               "qty" => 1
           ];           
           
           $request->session()->put("carrinho",$carrinho);
           return redirect('/carrinho/exibir');
    }


    public function remover(Request $request,$id){        
        
        $carrinho = $request->session()->get("carrinho");        
        
        if($carrinho == null || count($carrinho) == 0){
            return redirect('/carrinho/exibir');
        }        //procurando o id dentro da array carrinho
        $key = array_search($id, array_column($carrinho, 'product_id'));       
        unset($carrinho[$key]);        
        $request->session()->put("carrinho",$carrinho);        
        return redirect('/carrinho/exibir');    
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
            return redirect('principal');           
            } else {                
                $carrinho = [];
                $request->session()->put('carrinho', $carrinho);
                return redirect('/carrinho');           
            }
        }
}