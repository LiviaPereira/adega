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
{{--  @dd($produtos)  --}}


@foreach ($pedido as $item)
@endforeach


                <div class="main-container">

                <p>O pedido <strong>#{{Request::segment(3)}}</strong> foi realizado em <strong>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y')}} às {{ \Carbon\Carbon::parse($item->date)->format('h:i:s')}}</strong> e atualmente seu status é: <strong>{{$item->state}}</strong>.</p>

                <h4>Detalhes do Pedido</h4>
                <p>Frete: Gratúito</p>
                <p>Método de pagamento: {{$item->method}}</p>
                <p>Total: R$ {{number_format($item->total_price, 2, ',', '.')}} </p>

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