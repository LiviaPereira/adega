<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shoppingCart.css">
    <title>Shopping Cart</title>
</head>
<body class="body-cart">
    <?php include_once('includes/header.php'); ?>
    
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
                        <img src="img/corona-beer.jpg" alt="Cerveja Corona">
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
                        <img src="img/whisky.jpg" alt="Whisky Jack Daniel's">
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
    
    <?php include_once('includes/footer.php'); ?>
</body>
</html>