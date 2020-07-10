<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
