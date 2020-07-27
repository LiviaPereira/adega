@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="/css/panel.css">
    
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

            @foreach ($pedido as $item) @endforeach

            <div class="main-container">

                <p>O pedido <strong>#{{Request::segment(3)}}</strong> foi realizado em <strong>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y')}} às {{ \Carbon\Carbon::parse($item->date)->format('H:i:s')}}</strong> e atualmente seu status é: <strong>{{$item->state}}</strong>.</p>
                <br>
                <h5>Detalhes do Pedido</h5>

                    <table id="tb-list-order">
                        <thead>
                            <tr>
                                <td>Produto</td>
                                <td>Valor Unitário</td>
                                <td>Quantidade</td>
                                <td>Subtotal</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{$produto->name}}</td>
                                <td>R$ {{number_format($produto->sale_price, 2, ',', '.')}}</td>
                                <td>{{$produto->amount}}</td>
                                <td>{{number_format(($produto->amount) * ($produto->sale_price), 2, ',', '.')}}</td>
                            </tr>
                        @endforeach
                            <tr><td class="r-info price" colspan="4">Total: R$ {{number_format($item->total_price, 2, ',', '.')}}</td></tr>
                            <tr><td class="r-info" colspan="4">Frete: Grátis</td></tr>
                            <tr><td class="r-info" colspan="4">Forma de pagamento: {{$item->method}}</td></tr>
                        </tbody>
                    </table>

                <h5>Detalhes da Entrega</h5>

                <div class="form-address-edit">

                    <div>
                        <label id="lb2">Endereço: </label>
                        <p id="p2">{{$item->address}}, nº {{$item->number}}</p>
                    </div>
                    <div>
                        <label id="lb2">Complemento: </label>
                        <p id="p2">{{$item->complement}}</p>
                    </div>
                    <div>
                        <label id="lb2">Bairro: </label>
                        <p id="p2">{{$item->district}}</p>
                    </div>
                    <div>
                        <label id="lb2">Cidade: </label>
                        <p id="p2">{{$item->city}}</p>
                    </div>
                    <div>
                        <label id="lb2">CEP: </label>
                        <p id="p2">{{$item->zip_code}}</p>
                    </div>

                </div>

                {{--  <p>Endereço: {{$item->address}}, nº {{$item->number}}</p>
                <p>Complemento: {{$item->complement}}</p>
                <p>Bairro: {{$item->district}}</p>
                <p>Cidade: {{$item->city}}</p>
                <p>CEP: {{$item->zip_code}}</p>  --}}

            </div>        
    </section>

@endsection