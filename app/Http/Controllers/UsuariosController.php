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

        // Após cadastro, o autentica e o direciona à página principal
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
    }

    // Função da tela de login, solicita as credenciais e as valida
    function login(Request $request){
        $email = $request->email;
        $senha = $request->senha;

        if(Auth::attempt(['email' => $email,'password' => $senha])) {

            //// BUG
            // definir a variável de sessão "url.intended" para redirecionar  a url anterior ao login
            // if(!session()->has('url.intended')){
            //     session(['url.intended' => url()->previous()]);
            // } 

            return redirect()->intended('/');

        } else {
            return redirect('/login?error');
        }
    }

    // Função para realizar o logout do sistema
    function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    // Função para exibir a Tela de Login
    function loginView(){
        return view ('/login');
    }

    // Função para exibir a Tela de Registro (novo cliente)
    function registerView(){
        return view('/register');
    }


}
