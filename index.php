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
                
                    <div><img src="./img/24horas.png" alt=""></div>
                    <div><h3>Entrega em até 24 horas</h3></div>
                    <div><img src="./img/truck.png" alt=""></div>
                    <div><h3>Frete Grátis</h3></div>
                    <div> <img src="./img/security.png" alt=""> </div>
                    <div class="basis"><h3>Maior Segurança na sua compra</h3></div>
                   
            </section> 

        <main>

            <div class="titulos">
                <hr> <h1>Vinhos</h1> <hr>
            </div>

            <section>

                <div class="box">
                    <img src="./img/wine.jpg" alt="">
                </div>
                
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "freeScroll": true, "groupCells": "80%", "cellAlign": "left" }'>
                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/porca.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/mateus.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/tannat.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/mendes.jpg" alt="Vinho Porca">
                        <label>R$ 00,00</label>
                        <button>Comprar</button> 
                    </div>
                </div>

            </section>
            
             <div class="titulos">
                <hr> <h1>Cervejas</h1> <hr>
            </div>

            <section>

                <div class="box">
                     <img src="./img/cerveja.png" alt=""> 
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "freeScroll": true, "groupCells": "80%", "cellAlign": "left" }'>
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/brahma600.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/corona-beer.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/gt.png" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/bud.jpg" alt="Vinho Porca">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
                    </div>

            </section>

            <div class="titulos">
                    <hr> <h1>Destilados</h1> <hr>
                </div>

            <section>

                <div class="box">
                     <img src="./img/" alt="">  
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "freeScroll": true, "groupCells": "80%", "cellAlign": "left" }'>
                         <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/absolut.png" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/jack.png" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/montilla.png" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/orloff.png" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
                    </div>

            </section>

           <div class="titulos">
                    <hr> <h1>Não alcoólicos</h1> <hr>
                </div>

            <section>

                <div class="box">
                     <img src="./img/suco.jpeg" alt="">  
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "freeScroll": true, "groupCells": "80%", "cellAlign": "left" }'>
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/redbull.jpg" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/pepsi.jpg" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/h2o.jpg" alt="">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/dobemcoco.jpg" alt="">
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