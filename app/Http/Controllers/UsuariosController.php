<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
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

        return 'Usuário criado com sucesso';

        //return view ('/');


    }
}
