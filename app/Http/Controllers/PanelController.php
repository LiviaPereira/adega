<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


// Importando Classes/Modelos necessários

    use Illuminate\Support\Facades\Auth;        // para uso do middleware 'auth'
    use App\Models\Delivery;
    use App\Models\Order;
    use App\Models\Status;
    use App\Models\ShoppingCart;
    use App\Models\ShoppingCartItem;
    use App\User;


class PanelController extends Controller
{
    
    // Acesso à página inicial do Painel
    public function panel(Request $request){
        if (Auth::check()) {
        $usuario = $request->user();
        return view('panel.main', compact('usuario'));
        } else {
            return redirect('/logout');
        }
    }

    // Exibir os Pedidos do Cliente
    public function orders(Request $request){
        $usuario = $request->user();
        $id = $usuario->id;

        $pedidos = User::select('orders.id as orders_id', 'date', 'state', 'shopping_carts.id as shoppingCarts_id', 'total_price')
                        ->where('users.id', $id)
                        ->join('orders', 'users.id', '=', 'orders.users_id')
                        ->join('status', 'status.id', '=', 'orders.status_id')
                        ->join('shopping_carts', 'shopping_carts.id', '=', 'orders.shoppingCarts_id')
                        ->orderBy('date', 'desc')
                        ->get();

        return view('panel.orders', compact('pedidos'));
    }
    

    // VISUALIAR Pedido específico do Cliente
    public function showOrder(Request $request, $id){
        $usuario = $request->user()->id;

        $pedido = Order::select()
                        ->where('orders.id', $id)
                        ->where('orders.users_id', $usuario)
                        ->join('status', 'status.id', '=', 'orders.status_id')
                        ->join('shopping_carts', 'shopping_carts.id', '=', 'orders.shoppingCarts_id')
                        ->join('deliveries', 'deliveries.id', '=', 'orders.deliveries_id')
                        ->join('pay_methods', 'pay_methods.id', '=', 'orders.payMethods_id')
                        ->get();

                        foreach ($pedido as $ped) {}

        $produtos = shoppingCartItem::select()
                                    ->where('shopping_carts_id', $ped['shoppingCarts_id'])
                                    ->join('products', 'products.id', '=', 'shopping_cart_items.products_id')
                                    ->get();

        return view('panel.list_order', compact('pedido','produtos'));
    }


    // Função que exibe no "painel" o endereço cadastrado do cliente
    public function addressShow(Request $request){
        $usuario = $request->user();
        $id = $usuario->id;
        $endereco = Delivery::where('users_id', $id)->first();
        return view('panel.address', compact('usuario', 'endereco'));
    }

    // Função para editar endereço do cliente
    public function addressEdit(Request $request){
        $usuario = $request->user();
        $id = $usuario->id;
        $endereco = Delivery::where('users_id', $id)->first();

        // Verifica se o cliente tem endereco cadastrado
        if($endereco){

            // Se requisição = GET exibe o endereço atual no formulário
            if($request->isMethod('GET')) {

                return view('panel.address_edit', compact('usuario', 'endereco'));

            // Senão (requisição = POST) e permite fazer UPDATE do endereço no BD
            } else {

                Delivery::where('users_id', $id)->first()
                ->update([
                    'address' => $request->fAddress,
                    'number' => $request->fNumber,
                    'complement' => $request->fComplement,
                    'zip_code' => $request->fZipcode,
                    'district' => $request->fDistrict,
                    'city' => $request->fCity,
                    'users_id' => $id
                ]);
    
                return redirect('/panel/address');
            }

        // Cliente não tem endereço cadastrado, exibe a view e permite fazer INSERT no BD
        } else {

            if($request->isMethod('GET')) {

                return view('panel.address_edit', compact('usuario', 'endereco'));

            } else {

                Delivery::insert([
                    'address' => $request->fAddress,
                    'number' => $request->fNumber,
                    'complement' => $request->fComplement,
                    'zip_code' => $request->fZipcode,
                    'district' => $request->fDistrict,
                    'city' => $request->fCity,
                    'users_id' => $id
                ]);
    
                return redirect('/panel/address');
                // return redirect('/checkout');
            }
        }
    }


    // Editar as informações da Conta do Cliente
    public function account_edit(Request $request){
        $usuario = $request->user();
        $id = $usuario->id;
        $dados = User::find($id);

            if($request->isMethod('GET')) {

                return view('panel.account_edit', compact('dados'));

            } else {

                User::find($id)
                ->update([
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'email' => $request->email,
                    'cpf' => $request->cpf,
                    'birth' => $request->birth,
                    'cellphone' => $request->cellphone,
                    'phone' => $request->phone,
                    // 'news' => $request->news
                ]);

                return redirect('/panel/account/edit');
            }

    }

}
