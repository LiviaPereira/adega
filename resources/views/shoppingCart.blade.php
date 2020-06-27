@extends('templates.institucional')
@section('content')


<link rel="stylesheet" href="css/shoppingCart.css">

<body class="body-cart">
    
    <div class="cart-container" >
        <div class= "cart-son">
            <ul class="cart-list cart-descricao">
                <li class="product-cart">Produto</li>
                <li class="other-li">Preço</li>
                <li class="other-li">Quantidade</li>
                <li class="other-li">Total</li>
            </ul>
            <section class="product-checkout">
                <ul class="cart-list">
                    <li class="product-in-cart">
                        <img src="img/beer/corona.png" alt="Cerveja Corona">
                        <p>Cerveja Corona Extra Long Neck 330ml</p>
                    </li>
                    <li class="other-li">R$ 5,00</li>
                    <li class="other-li quantidade"><a class="cart-links" href="#">-</a><p>1</p><a class="cart-links" href="#">+</a></li>
                    <li class="other-li total-in-cart">R$ 5,00</li>
                </ul>
            </section>
            <section class="product-checkout">
                <ul class="cart-list">
                    <li class="product-in-cart">
                        <img src="img/distillate/whisky.jpg" alt="Whisky Jack Daniel's">
                        <p>Whisky Jack Daniel's Single Barrel 750 mL</p>
                    </li>
                    <li class="other-li">R$ 150,00</li>
                    <li class="other-li quantidade"><a class="cart-links" href="#">-</a><p>1</p><a class="cart-links" href="#">+</a></li>
                    <li class="other-li total-in-cart">R$ 150,00</li>
                </ul>
            </section>
        </div>
        <a class="cart-links" href="#"><p class="cupom">Adicionar cupom de desconto</p></a>
        <div class="checkout">
            <ul>
                <li><p>Subtotal</p><p>R$ 155,00</p></li>
                <li class="delivery"><p><img src="img/truck.png" alt="Caminhão"> Entrega</p><a class= "cart-links" href="#" >Calcular</a></li>
                <li><p>Total</p><p>R$ 155,00</p></li>
                <li><a class="cart-links fechar-pedido" href="#">FECHAR PEDIDO</a></li>
            </ul>
        </div>
        <a class="cart-links" href="index.php"><p class="cupom">Continuar Comprando</p></a>
    </div>
    
@endsection