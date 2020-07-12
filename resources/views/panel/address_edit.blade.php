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
                            <li><a href="/panel/account_edit">CONTA</a></li>
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
                                    <label for="fAddress">Endereço</label>
                                    <input type="text" name="fAddress" id="fAddress" value="@if($endereco){{ $endereco->address }}@endif" required>
                                </div>
                                <div>
                                    <label for="fNumber">Número</label>
                                    <input type="text" name="fNumber" id="fNumber" value="@if($endereco){{ $endereco->number }}@endif" required>
                                </div>
                                <div>
                                    <label for="fComplement">Complemento</label>
                                    <input type="text" name="fComplement" id="fComplement" value="@if($endereco){{ $endereco->complement }}@endif">
                                </div>
                                <div>
                                    <label for="fZipcode">CEP</label>
                                    <input type="text" name="fZipcode" id="fZipcode" value="@if($endereco){{ $endereco->zip_code }}@endif" required>
                                </div>
                                <div>
                                    <label for="fDistrict">Bairro</label>
                                    <input type="text" name="fDistrict" id="fDistrict" value="@if($endereco){{ $endereco->district }}@endif" required>
                                </div>
                                <div>
                                    <label for="fCity">Cidade</label>
                                    <input type="text" name="fCity" id="fCity" value="@if($endereco){{ $endereco->city }}@endif" required>
                                </div>
                                <br>
                                <div class="register-submit">
                                    <button type="submit">Salvar Alterações</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>

@endsection