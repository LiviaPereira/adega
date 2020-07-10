@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/panel.css') }}">

    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li class="active"><a href="/panel">PAINEL</a></li>
                            <li><a href="/panel/orders">PEDIDOS</a></li>
                            <li><a href="/panel/address">ENDEREÇOS</a></li>
                            <li><a href="/panel/account_edit">CONTA</a></li>
                            <li id="logout"><a href="/logout">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <p>Olá, <strong>{{ $usuario->name }} {{ $usuario->surname }}</strong> (não é você? <a href="/logout">Sair</a>)</p>

                    <br>

                    <p>A partir do painel de controle de sua conta, você pode:</p>

                    <ul>
                        <li>Ver suas <a href="/orders">compras recentes</a> </li>
                        <li>Gerenciar seus <a href="/address">endereços de entrega e faturamento</a> </li>
                        <li>E <a href="/account_edit">editar sua senha e detalhes da conta.</a></li>
                    </ul>

                </div>    
    </section>

@endsection