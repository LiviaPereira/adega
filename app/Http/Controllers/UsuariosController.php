<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Delivery;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{

    // Função que cria usuário, em seguida o autentica no sistema
    function store(Request $request){
        $user = new User ();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //$user->rememberToken = $request->rememberToken;
        $user->cpf = $request->cpf;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->birth = $request->birth;
        $user->gender = $request->gender;
        $user->cellphone = $request->cellphone;

        $user->save();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }
    }

    // Função da tela de login, solicita as credenciais e as valida
    function login(Request $request){
        $email = $request->email;
        $senha = $request->senha;

        if(Auth::attempt(['email' => $email,'password' => $senha])) {
            return redirect('/');
        } else {
            return redirect('/login?error');
        }
    }

    // Função para realizar o logout do sistema
    function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }


    function loginView(){
        return view ('/login');
    }

    function registerView(){
        return view('/register');
    }


    // PAINEL

    public function panel(Request $request){
        if (Auth::check()) {
        $usuario = $request->user();
        return view('panel.main', compact('usuario'));
        } else {
            return redirect('/logout');
        }
    }

    public function orders(){
        return view('panel.orders');
    }


    public function addressShow(Request $request){
        $usuario = $request->user();
        $id = $usuario->id;
        $endereco = Delivery::where('users_id', $id)->first();
        return view('panel.address', compact('usuario', 'endereco'));
    }

    public function addressEdit(Request $request){
        $usuario = $request->user();
        $id = $usuario->id;

        if($request->isMethod('GET')) {
            
            $endereco = Delivery::where('users_id', $id)->first();
            return view('panel.address_edit', compact('usuario', 'endereco'));
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
    }

    public function account_edit(){
        return view('panel.account_edit');
    }

}
