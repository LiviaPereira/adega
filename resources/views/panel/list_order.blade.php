@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/panel.css') }}">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li class="active"><a href="/panel/orders">PEDIDOS</a></li>
                            <li><a href="/panel/address">ENDEREÇOS</a></li>
                            <li><a href="/panel/account/edit">CONTA</a></li>
                            <li id="logout"><a href="/logout">SAIR</a></li>
                        </ul>
                    </nav>
                </div>
{{--  @dd($pedido)  --}}

@foreach ($pedido as $item)
@endforeach


                <div class="main-container">

                <p>O pedido <strong>#678952</strong> foi realizado em <strong>{{$item->date}}</strong> e atualmente consta como <strong>{{$item->state}}</strong>.</p>

                <h4>Detalhes do Pedido</h4>
                <p>Forma de pagamento: {{$item->method}}</p>

                <h4>Endereço de Entrega</h4>
                <p>Nome</p>
                <p>{{$item->address}}, nº {{$item->number}}</p>
                <p>{{$item->complement}}</p>
                <p>{{$item->district}}</p>
                <p>{{$item->city}}</p>
                <p>{{$item->zip_code}}</p>
                <p>celular</p>


                </div>        
    </section>

@endsection