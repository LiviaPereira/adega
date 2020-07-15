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
{{--  @dd($pedidos)  --}}
                <div class="main-container">
                    <table class="table-mobile">
                        <thead>
                            <tr>
                                <td>Pedido</td>
                                <td>Data</td>
                                <td>Status</td>
                                <td>Total</td>
                                <td>Prazo de Entrega</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($pedidos as $item)
                                    <tr>
                                        <td> <span>Pedido<br></span> #{{$item->id}}</td>
                                        <td> <span>Data<br></span> {{$item->date}}</td>
                                        <td> <span>Status<br></span> {{$item->state}}</td>
                                        <td> <span>Total<br></span> <s>R$ 120,00</s></td>
                                        <td> <span>Prazo de Entrega<br></span> <s>Expresso (em 4hs)</s></td>
                                        <td> <span>Ações<br></span> <s>Visualizar</s></td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>        
    </section>

@endsection