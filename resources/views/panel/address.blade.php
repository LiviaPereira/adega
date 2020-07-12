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
{{--  @dd($id)  --}}
                <div class="main-container">
                    <p>O endereço a seguir será utlizado na página de finalizar pedido como endereço padrão, mas é possível modificá-lo durante a finalização do pedido.</p>
                    <br>

                    @if ($endereco)
                        <div class="address">
                            <strong>Endereço de entrega</strong>
                            <ul>
                                <li> {{ $usuario->name }} {{ $usuario->surname }}</li>
                                <li> {{ $endereco->address }}, Nº {{ $endereco->number }}</li>
                                <li> {{ $endereco->complement }} </li>
                                <li> {{$endereco->zip_code }} </li>
                                <li> {{$endereco->district }} </li>
                                <li> {{$endereco->city }} </li>
                            </ul>
                            <p><a href="/panel/address/edit">Editar Endereço</a></p>
                        @else
                            <strong>Você ainda não possui um endereço cadastrado!</strong>
                            <p><a href="/panel/address/edit">Cadastrar Endereço</a></p>
                        @endif

                    </div>

                </div>
    </section>

@endsection