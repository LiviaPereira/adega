<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Delivery;
use App\User;
use App\Models\ShoppingCartItem;


class ShoppingCartController extends Controller
{

    // Função que exibe tudo no carrinho
    public function index(Request $request) {
        $produtos = ShoppingCart::all();
        return view('shoppingCart',['produtos'=>$produtos]);
    }


    // Função para exibir os Itens do Carrinho de Compra
    public function exibir(Request $request){
            // $request->session()->flush();
        if($request->session()->has("carrinho")){
            $carrinho = $request->session()->get("carrinho");
            $produtos=[];

        foreach($carrinho as $item){           
                $produto = Product::find($item['product_id']);

                $item['name'] = $produto->name;
                $item['photo'] = $produto->photo;
                $item['sale_price'] = $produto->sale_price;
                $produtos[] = $item;
            }

            return view('shoppingCart',["produtos" => $produtos]);
            
        } else {

            return view('shoppingCart',["produtos" => []]);
        }
    }


    // Função para adicionar mais Itens ao Carrinho de Compra
    public function adicionar(Request $request, $id){
    //    dd(Product::find($id));

       $produto = Product::find($id);
       $valor = $produto->sale_price;
    //    dd($produto);
       
       if(Product::find($id) == null) {
            return "produto nao existe";
        }
            
        if(!$request->session()->has("carrinho")){
            $request->session()->put('carrinho', [
                    [
                        'product_id'     => $id,
                        'sale_price'     => $valor,
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
               'sale_price'     => $valor,
               "qty" => 1
           ];
           
        //    dd($carrinho);
           $request->session()->put("carrinho",$carrinho);
           return redirect('/exibir');
    }


    // Função para decrementar um Item do Carrinho de Compra
    public function retirar(Request $request, $id){
                
                $carrinho = $request->session()->get("carrinho");
                //>=0 || ==true
    
                if(($key = array_search($id, array_column($carrinho, 'product_id')))!== false){  

                    $carrinho[$key]['qty']--;
                    $request->session()->put("carrinho",$carrinho);
                    return redirect('/exibir');
                }           
                
               $request->session()->put("carrinho",$carrinho);
               return redirect('/exibir');
        }




    //Função para REMOVER um item do Carrinho de Compras
    public function remover(Request $request,$id){
        
        $carrinho = $request->session()->get("carrinho");
        
        if($carrinho == null || count($carrinho) == 0){
            return redirect('/exibir');
        }
        
        // Procurando o id dentro da array carrinho
        $key = array_search($id, array_column($carrinho, 'product_id'));

        unset($carrinho[$key]);
        $carrinho = array_values($carrinho);

        $request->session()->put("carrinho",$carrinho);
        
        return redirect('/exibir');
    }


    // Função para realizar o CheckOut da Compra
    public function finalizarCompra(Request $request){  

        if($request->session()->has('carrinho')){            
            $carrinho = $request->session()->get('carrinho'); 
       
            $user = Auth::user();                   // captura o usuário logado para iniciar o checkout
            
            $valorTotal = 0;
            foreach($carrinho as $produto){
                $valorTotal += ($produto["sale_price"] * $produto["qty"]);
            }

            $novoCarinho = new ShoppingCart;            // cria um novo carrinho
            $novoCarinho->total_price = $valorTotal;    // valor total dos produtos
            $novoCarinho->users_id = $user->id;         // define o usuário dono do carrinho
            $novoCarinho->save();                       // grava as informações no Banco
            $IDnovoCarinho = $novoCarinho->id;          // captura o ID das informações gravadas do Novo Carrinho

                
            foreach($carrinho as $produto){                                 // "abre" o cookie "carrinho"
                $novoItemCompra = new ShoppingCartItem();                   // cria um novo Item (que irá dentro de carrinho)
                $novoItemCompra->amount = $produto["qty"];                  // define a quantidade dos itens de acordo com o array de carrinho ["qty"]
                $novoItemCompra->products_id = $produto["product_id"];      // define o id do produto de acordo com o array de carrinho ["product_id"]
                $novoItemCompra->shopping_carts_id = $IDnovoCarinho;        // define o ID associado ao Novo Carrinho
                $novoItemCompra->save();                                    // grava as informações no Banco
                $IDnovoItemCompra = $novoItemCompra->id;                    // captura o ID das informações gravadas do Novo Item de Carrinho

            }

            $endereco = Delivery::where('users_id', $user->id)->first();    // captura e armazena o endereço do usuário correspondente

            if($endereco == null){                                          // se o usuário ainda não tiver um endereço cadastrado, deve cadastrar
                return redirect('/panel/address');
            }

            $novoPedido = new Order();                                      // cria um novo pedido
            $novoPedido->users_id = $user->id;                              // define o usuário dono do pedido
            $novoPedido->date = date("Y-m-d H:i:s");                        // define data/hora do pedido
            $novoPedido->shoppingCarts_id = $IDnovoCarinho;                 // adiciona o ID do carrinho criado anteriormente
            $novoPedido->deliveries_id = $endereco->id;                     // define o endereço de entrega do pedido
            $novoPedido->payMethods_id = 2;                                 // define o método de pagamento para 1 = Cartão de Crédito
            $novoPedido->status_id = 1;                                     // define o status do pedido para 2 = Preparando pedido
            $novoPedido->save();                                            // grava as informações no Banco
            $IDnovoPedido = $novoPedido->id;                                // captura o ID das informações gravadas do Novo Pedido

            // $request->session ()->flush();

            $request->session()->forget('carrinho');    // limpa itens do carrinho

            return redirect('/pedidoFinalizado');       // encaminha para tela de pedido finalizado

        } else {           // senão: carrinho é vazio? cria o array de carrinho e sua sessão, e redireciona

            $carrinho = [];
            $request->session()->put('carrinho', $carrinho);

            return redirect('/shoppingCart');
        }
    }

    // Função que exibe a página após checkOut
    public function show() {
        return view('pages.pedidofinalizado');
    }



    public function checkout(Request $request){

    if($request->session()->has("carrinho")){
        $carrinho = $request->session()->get("carrinho");
        $produtos=[];

    foreach($carrinho as $item){           
            $produto = Product::find($item['product_id']);

            $item['name'] = $produto->name;
            $item['photo'] = $produto->photo;
            $item['sale_price'] = $produto->sale_price;
            $produtos[] = $item;
        }

        $user = Auth::user();
        $endereco = Delivery::where('users_id', $user->id)->first();

        return view('checkout',["produtos" => $produtos], ["endereco" => $endereco]);
        
    } 
}

}