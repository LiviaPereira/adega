@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/panel.css') }}">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li><a href="/panel/orders">PEDIDOS</a></li>
                            <li><a href="/panel/address">ENDEREÇOS</a></li>
                            <li class="active"><a href="/panel/account/edit">CONTA</a></li>
                            <li id="logout"><a href="/logout">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <div class="account">
                        <strong>Alterar Informações de Cadastro</strong>
                            <br>
                            <br>
                        <div class="form-address-edit">
                            <form action="/panel/account/edit" method="post">
                            @csrf
                                <div>
                                    <label for="name">Nome *</label>
                                    <input type="text" name="name" id="name" value="{{$dados->name }}" required>
                                </div>
                                <div>
                                    <label for="surname">Sobrenome *</label>
                                    <input type="text" name="surname" id="surname" value="{{$dados->surname }}" required>
                                </div>
                                <div>
                                    <label for="email">E-mail *</label>
                                    <input type="text" name="email" id="email" value="{{$dados->email }}" required>
                                </div>
                                <div>
                                    <label for="cpf">CPF *</label>
                                    <input oninput="mascara(this, 'cpf')" type="text" name="cpf" id="cpf" value="{{$dados->cpf }}" required>
                                </div>
                                <div>
                                    <label for="birth">Data de Nascimento *</label>
                                    <input type="date" name="birth" id="birth" value="{{$dados->birth }}" required>
                                </div>
                                <div>
                                    <label for="cellphone">Celular *</label>
                                    <input type="tel" name="cellphone" id="cellphone" value="{{$dados->cellphone }}" required>
                                </div>
                                <div>
                                    <label for="phone">Telefone</label>
                                    <input type="tel" name="phone" id="phone" value="{{$dados->phone }}">
                                </div>
                                {{--  <div>
                                    <label for="news">Newsletter *</label>
                                    <select name="news" id="news">
                                        <option value="true">Sim</option>
                                        <option value="false">Não</option>
                                    </select>
                                </div>  --}}
                                <label>* campos obrigatórios</label>
                                <div class="register-submit">
                                    <button type="submit">Salvar Alterações</button>
                                </div>

                                {{--  <fieldset>
                                    <legend>Alterar Senha</legend>
                                    <p>Para alterar, preencha os campos abaixo.</p>
                                    <br>
                                    <p>Para manter a atual, deixe-os em branco.</p>
                                    <div>
                                        <label for="password">Senha Atual:</label>
                                        <input type="password" name="password" id="password" >
                                    </div>
                                    <div>
                                        <label for="passwordNew">Nova Senha:</label>
                                        <input type="password" name="passwordNew" id="passwordNew" >
                                    </div>
                                    <div>
                                        <label for="passwordConf">Confirmar Nova Senha:</label>
                                        <input type="password" name="passwordConf" id="passwordConf" >
                                    </div>
                                </fieldset>
                                <br>
                                <label>* campos obrigatórios</label>
                                <div class="register-submit">
                                    <button type="submit">Alterar Senha</button>
                                </div>  --}}
                            </form>
                        </div>

                    </div>

                </div>
    </section>
<script>
    function mascara(i,t){
    
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
        return;
    }
    
    if(t == "data"){
        i.setAttribute("maxlength", "10");
        if (v.length == 2 || v.length == 5) i.value += "/";
    }

    if(t == "cpf"){
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
    }

    if(t == "cnpj"){
        i.setAttribute("maxlength", "18");
        if (v.length == 2 || v.length == 6) i.value += ".";
        if (v.length == 10) i.value += "/";
        if (v.length == 15) i.value += "-";
    }

    if(t == "cep"){
        i.setAttribute("maxlength", "9");
        if (v.length == 5) i.value += "-";
    }

    if(t == "tel"){
        if(v[0] == 9){
            i.setAttribute("maxlength", "10");
            if (v.length == 5) i.value += "-";
        }else{
            i.setAttribute("maxlength", "9");
            if (v.length == 4) i.value += "-";
        }
    }
    }
</script>
@endsection