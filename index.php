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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Adega a Jato</title>
</head>

<body>
    
    <div id="interface">
            <?php include_once('includes/header.php'); ?>

            <div class="banner"></div>

            <section class="service spacing">
                
                    <div style="padding-bottom:10px;"><img src="./img/24horas.png" alt=""></div>
                    <div><h1>Entrega em até 24 horas</h1></div>
                    <div><img src="./img/truck.png" alt=""></div>
                    <div><h1>Frete Grátis</h1></div>
                    <div> <img src="./img/security.png" alt=""> </div>
                    <div class="basis"><h1>Maior Segurança na sua compra</h1></div>
                   
            </section>

        <main>
            
            <div class="titulos">
                <hr> <h1>Vinhos</h1> <hr>
            </div>

            <section class="products">

                <div class="box">
                    <img src="./img/wine.jpg" alt="">
                </div>
                
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                    <div class="gallery-cell">
                        <img src="./img/porca.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button>
                    </div>

                    <div class="gallery-cell">
                        <img src="./img/mateus.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button>
                    </div>

                    <div class="gallery-cell">
                        <img src="./img/tannat.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button>
                    </div>

                    <div class="gallery-cell">
                    <img src="./img/mendes.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button>
                    </div>
                </div>

            </section>
            
            <div class="titulos">
                <hr> <h1>Cervejas</h1> <hr>
            </div>

            <section class="products">

            <div class="box">
                <img src="./img/cerveja.png" alt=""> 
            </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <img src="./img/brahma600.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <img src="./img/corona-beer.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <img src="./img/gt.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <img src="./img/bud.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
                    </div>

            </section>

            <div class="titulos">
                <hr> <h1>Destilados</h1> <hr>
            </div>

            <section class="products">

            <div class="box">
                  <img src="./img/cachaça.png" alt="">  
            </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <img src="./img/absolut.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <img src="./img/jack.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <img src="./img/montilla.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <img src="./img/orloff.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
                    </div>

            </section>

            <div class="titulos">
                <hr> <h1>Não alcoólicos</h1> <hr>
            </div>

            <section class="products">

            <div class="box">
                  <img src="./img/suco.jpeg" alt="">  
            </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <img src="./img/redbull.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <img src="./img/pepsi.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <img src="./img/h2o.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <img src="./img/dobemcoco.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
                    </div>

            </section>
        </main>

        <?php include_once('includes/footer.php'); ?>
    </div>
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>