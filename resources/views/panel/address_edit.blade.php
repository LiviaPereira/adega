@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/panel.css') }}">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li><a href="/panel/orders">PEDIDOS</a></li>
                            <li class="active"><a href="/panel/address">ENDEREÇOS</a></li>
                            <li><a href="/panel/account/edit">CONTA</a></li>
                            <li id="logout"><a href="/logout">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <div class="address">
                        <strong>Alterar Endereço de Entrega</strong>
                        <br>
                        <br>
                        <div class="form-address-edit">
                            <form action="/panel/address/edit" method="post">
                            @csrf
                                <div>
                                    <label for="fAddress">Endereço *</label>
                                    <input type="text" name="fAddress" id="fAddress" value="{{ $endereco->address ?? ''}}" required>
                                </div>
                                <div>
                                    <label for="fNumber">Número *</label>
                                    <input type="text" name="fNumber" id="fNumber" value="{{ $endereco->number ?? ''}}" required>
                                </div>
                                <div>
                                    <label for="fComplement">Complemento</label>
                                    <input type="text" name="fComplement" id="fComplement" value="{{ $endereco->complement ?? ''}}">
                                </div>
                                <div>
                                    <label for="fZipcode">CEP *</label>
                                    <input oninput="mascara(this, 'cep')" type="text" name="fZipcode" id="fZipcode" value="{{ $endereco->zip_code ?? ''}}" required>
                                </div>
                                <div>
                                    <label for="fDistrict">Bairro *</label>
                                    <input type="text" name="fDistrict" id="fDistrict" value="{{ $endereco->district ?? ''}}" required>
                                </div>
                                <div>
                                    <label for="fCity">Cidade *</label>
                                    <input type="text" name="fCity" id="fCity" value="{{ $endereco->city ?? ''}}" required>
                                </div>
                                <label>* campos obrigatórios</label>
                                <div class="register-submit">
                                    <button id="myButton" type="submit">Salvar Alterações</button>
                                </div>
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
        

        if(t == "cep"){
        i.setAttribute("maxlength", "9");
        if (v.length == 5) i.value += "-";
    }
       }
</script>

@endsection