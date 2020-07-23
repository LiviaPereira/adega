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
                    @if ($endereco)
                        <div class="form-address-edit">
                            <strong>Endereço de entrega</strong>
                            <br>
                            <br>

                            <div>
                                <label>Destinatário: </label>
                                <p>{{ $usuario->name }} {{ $usuario->surname }}</p>
                            </div>

                            <div>
                                <label>Endereço: </label>
                                <p>{{ $endereco->address }}, Nº {{ $endereco->number }}</p>
                            </div>

                            <div>
                                <label>Complemento: </label>
                                <p>{{ $endereco->complement }}</p>
                            </div>

                            <div>
                                <label>CEP: </label>
                                <p>{{ $endereco->zip_code }}</p>
                            </div>

                            <div>
                                <label>Bairro: </label>
                                <p>{{ $endereco->district }}</p>
                            </div>

                            <div>
                                <label>Cidade: </label>
                                <p>{{ $endereco->city }}</p>
                            </div>

                            <p><a href="/panel/address/edit">Editar Endereço</a></p>
                        @else
                            <div id="empty">
                                <p class="info">Você ainda não possui um endereço cadastrado! <a href="/panel/address/edit">Clique para Cadastrar</a></p>
                            </div>
                        @endif

                    </div>

                </div>
    </section>

@endsection