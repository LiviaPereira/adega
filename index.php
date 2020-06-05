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
    <title>Vinariam</title>
</head>

<body>
    
    <div id="interface">
            <?php include_once('includes/header.php'); ?>

            <div class="banner"></div>

             <section class="service">
                
                    <div><img src="./img/24horas.png" alt=""></div>
                    <div><h3>Entrega em até 24 horas</h3></div>
                    <div><img src="./img/truck.png" alt=""></div>
                    <div><h3>Frete Grátis</h3></div>
                    <div> <img src="./img/security.png" alt=""> </div>
                    <div class="basis"><h3>Maior Segurança na sua compra</h3></div>
                   
            </section> 

        <main>

            <section>

                <div class="titulos">
                    <hr> <h1>Vinhos</h1> <hr>
                </div>

                <div class="box">
                    <a href="products.php"> <img src="./img/wine/brinde.png" alt="brinde"> </a>
                </div>
                
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": 4, "freeScroll": true }'>
                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/porca.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/mateus.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/tannat.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/mendes.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/porca.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/mateus.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/tannat.jpg" alt="Vinho Porca">
                        <label> <strong> R$ 00,00 </strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <img src="./img/wine/mendes.jpg" alt="Vinho Porca">
                        <label><strong>R$ 00,00</strong></label>
                        <button>Comprar</button> 
                    </div>
                </div>

            </section>

            <section>

                <div class="titulos">
                    <hr> <h1>Cervejas</h1> <hr>
                </div>

                <div class="box">
                    <a href="products.php"> <img src="./img/beer/beer.png" alt="beer"> </a>
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": 4, "freeScroll": true }'>
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/beer/b-01.png" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/beer/b-02.png" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/beer/b-03.png" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/beer/b-04.png" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img//beer/bud.jpg" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img//beer/corona-beer.jpg" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/beer/gt.png" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/beer/pack_bud.png" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
                        
                    </div>

            </section>

                
            <section>

                <div class="titulos">
                    <hr> <h1>Destilados</h1> <hr>
                </div>

                <div class="box">
                    <a href="products.php"> <img src="./img/distillate/drink.png" alt="drink">  </a>
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": 4, "freeScroll": true }'>
                         <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/distillate/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                    </div>

            </section>

            <section>

                <div class="titulos">
                    <hr> <h1>Não alcoólicos</h1> <hr>
                </div>

                <div class="box">
                    <a href="products.php"> <img src="./img/non-alcoholic/sucao.png" alt="sucao">  </a>
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": 4, "freeScroll": true }'>
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/pepsi.jpg" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/dobemcoco.jpg" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/pepsi.jpg" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/" alt="">
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <img src="./img/non-alcoholic/dobemcoco.jpg" alt="">
                            <label><strong>R$ 00,00</strong></label>
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