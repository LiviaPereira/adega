@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    {{-- @if ($produtos != null) --}}

    @php
    $valorTotal = 0;
    foreach($produtos as $produto){
        $valorTotal += $produto["sale_price"] * $produto["qty"];
    }
    @endphp

        <section id="panel-chk">

            <div class="main-container">             

                <div class="chk-main">

                    <div class="chk-pdt">
                        <p id="ckh-info">1 - Revise seu Pedido</p>
                        <br>

                        <table class="table-mobile">
                            <thead>
                                <tr>
                                    <td>Produto</td>
                                    <td>Quantidade</td>
                                    <td>Valor</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($produtos as $item)
                                <tr>
                                    <td><p>{{ $item['name'] }}</p></td>
                                    <td><p>{{$item['qty']}} x</p></td>
                                    <td><p>R$ {{number_format($item['qty'] * $item['sale_price'], 2, ',', '.') }}</p></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <br>

                        <p>Total do seu pedido</p>
                        <h3> R$ {{number_format($valorTotal, 2, ',', '.')}} </h3>

                        <br>
                          
                        <p id="info3"> <a href="/exibir"> Editar pedido</a></p>

                        <br>
                                                

                    </div>

                    <div class="chk-pay">
                        <p id="ckh-info">2 - Selecione a forma de pagamento</p>
                        <br>

                        <table class="table-mobile">
                            <thead>
                                <tr>
                                    <td><input type="radio" name="" id=""></td>
                                    <td style="text-align:left">Boleto bancário</td>
                                </tr>
                            </thead>
                            <tbody>
                                <td colspan="2"><p id="pay-info">Atenção: Pedidos realizados através do boleto bancário podem levar até 48 horas úteis para serem confirmados. O prazo de entrega começa a contar a partir da confirmação do pagamento.</p></td>
                            </tbody>
                        </table>

                        <br>

                        <p id="ckh-info">3 - Frete</p>
                        <p>Grátis</p>

                        <br>

                    </div>

                    <br>

                    <div class="chk-end">

                        <p id="ckh-info">4 - Endereço de Entrega</p>

                        @if ($endereco == null)
                        <br>
                            <p>Você ainda não possui um endereço cadastrado!</p>
                            <br>
                            <p id="info"><a href="/panel/address/edit">Cadastrar</a></p>
                        @else

                        <br>
                        <p>{{ $endereco->address }}, Nº {{ $endereco->number }}</p>
                        <p>{{ $endereco->complement }}</p>
                        <p>{{ $endereco->zip_code }}</p>
                        <p>{{ $endereco->district }}</p>
                        <p>{{ $endereco->city }}</p>
                            
                        <br>
                        <div id="comprarb">
                            <button><a href="/finalizarCompra"> Confirmar compra</a></button>
                        </div>
                        @endif

                    </div>

                </div>

            </div>


@endsection