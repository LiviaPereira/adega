@extends('templates.institucional')
@section('content')


<link rel="stylesheet" href="css/shoppingCart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="body-cart">

{{--  @dd($produtos)  --}}

@if ($produtos != null)
       
    <div class="cart-container" >
        <div class= "cart-son">
            <ul class="cart-list cart-descricao">
                <li class="product-cart">Produto</li>
                <li class="other-li">Preço</li>
                <li class="other-li">Quantidade</li>
                <li class="other-li">Remover</li>
            </ul>

            @foreach ($produtos as $item) 
            {{--  @dd($produtos)  --}}
                <section class="product-checkout">
                    <ul class="cart-list">
                        <li class="product-in-cart">
                            <img src="{{$item['photo']}}" alt="Imagem do Produto">
                            <p>{{ $item['name'] }}</p>
                        </li>
                        <li class="other-li">{{number_format($item['sale_price'], 2, ',', '.')}}</li>
                        {{--  <li class="other-li quantidade"><a class="cart-links" href="#">-</a><p>1</p><a class="cart-links" href="#">+</a></li>  --}}
                        <li class="other-li total-in-cart">{{$item['qty']}}</li>
                        
                        <li class="other-li quantidade"><a class="cart-links" href="/remover/{{$item['product_id']}}"><i style="font-size:24px" class="fa">&#xf014;</i></a></li>
                    </ul>
                </section>
            @endforeach

            {{--  @php
                $precoTotal = $precoTotal + ($produto['qty'] * $produto['preco_venda']);
            @endphp  --}}


            {{--  <button type="submit"><a href="/carrinho/adicionar/{{$busca->idProduto}}">Adicionar ao Carinho</a></button>  --}}



        </div>
        {{--  <a class="cart-links" href="#"><p class="cupom">Adicionar cupom de desconto</p></a>  --}}
        <div class="checkout">
            <ul>
                {{--  <li><p>Subtotal</p><p>R$ 155,00</p></li>  --}}
                <li class="delivery"><p><img src="img/truck.png" alt="Imagem Frete Grátis"> Entrega <strong> GRÁTIS</strong></p></li>
                <li><p>Total</p><p>R$ 155,00</p></li>
                <li><a class="cart-links fechar-pedido" href="/finalizarCompra">FECHAR PEDIDO</a></li>
            </ul>
        </div>
        <a class="cart-links" href="/"><p class="cupom">Continuar Comprando</p></a>
    </div>

@else

    <div class="empty-car">
        <h1>Carrinho</h1>
        <p class="info">Seu carrinho está vazio</p>
        <a href="/"><img src="{{url('img/empty-cart.jpg')}}" alt="Imagem carrinho vazio"></a>
    </div>
    
@endif
    
@endsection