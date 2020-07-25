@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    @if ($produtos != null)

    @php
    $valorTotal = 0;
    foreach($produtos as $produto){
        $valorTotal += $produto["sale_price"] * $produto["qty"];
    }
    @endphp

        <section id="panel">

            <div class="main-container">             

                <table class="table-mobile">
                    <thead>
                        <tr>
                            <td>PRODUTO</td>
                            <td>PREÇO</td>
                            <td>QUANTIDADE</td>
                            <td>SUBTOTAL</td>
                            <td>REMOVER</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $item) 
                        {{--  @dd($item);  --}}
                            <tr>
                                <td> 
                                    <a href="/product/{{$item['product_id']}}">
                                        <img class="foto" src="{{$item['photo']}}" alt="Imagem do Produto">
                                        <p class="product-name">{{ $item['name'] }}</p>
                                    </a>
                                </td>
                                <td> <span>Preço<br></span> R$ {{number_format($item['sale_price'], 2, ',', '.')}} </td>
                                <td> <span>Quantidade<br></span>

                                @if ($item['qty'] == 1)
                                    <a href="/remover/{{$item['product_id']}}"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                        {{$item['qty']}}
                                    <a href="/adicionar/{{$item['product_id']}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    
                                @else
                                    <a href="/retirar/{{$item['product_id']}}"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                        {{$item['qty']}}
                                    <a href="/adicionar/{{$item['product_id']}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    
                                @endif

                                </td>
                                <td> <span>Subtotal<br></span> R$ {{number_format($item['qty'] * $item['sale_price'], 2, ',', '.') }} </td>
                                <td> <span>Remover<br></span><a class="cart-links" href="/remover/{{$item['product_id']}}"><i style="font-size:24px" class="fa">&#xf014;</i></a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="inferior">
            
                <div class="checkout">

                    <table class="fechar">
                        <tr>
                            <td><strong>Frete:</strong></td>
                            <td>GRÁTIS</td>
                        </tr>
                        <tr>
                            <td><strong>Total:</strong></td>
                            <td>R$ {{number_format($valorTotal, 2, ',', '.')}}</td>
                        </tr>
                    </table>
                    <div id="comprarb">
                        <button><a href="/checkout">FECHAR PEDIDO</a></button>
                    </div>
                </div>
        </div>

        </section>

        @else

            <div class="empty-car">
                {{-- <h1>Carrinho</h1> --}}
                <p class="info">Seu carrinho está vazio.</p>
                <a href="/"><img src="{{url('img/empty-cart.jpg')}}" alt="Imagem carrinho vazio"></a>
            </div>
        
        @endif

@endsection