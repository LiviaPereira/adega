<?php 
include("includes/bebidas.php");



?>

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
            <?php include_once(__DIR__.'/includes/header.php'); ?>

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

            <?php /* if ($bebidas[] < 4) : */ ?>
                <?php  foreach ($titulos as $titulo) :  ?>
                        
                    <section>
                        <div>
                            <hr><h1> <?= $titulo ?> </h1> <hr>
                        </div>

                        <div>
                            <a href="products.php"> <img src="./img/wine.jpg" alt=""> </a>
                        </div>
                                
                        <div class="main-gallery js-flickity" data-flickity='{ "wrapAround": true, "contain": true, "groupCells": 2 }'> <!--   -->
                            <div class="gallery-cell">
                                        <!-- <p>Nome do produto</p> -->
                                         <img src="./img/wine.jpg" alt="Vinho Porca">
                                        <!-- <label>R$ 00,00</label>
                                        <button>Comprar</button>   -->
                            </div>

                            <div class="gallery-cell">
                                        <!-- <p>Nome do produto</p> -->
                                        <!-- <img src="./img/porca.jpg" alt="Vinho Porca"> -->
                                        <!-- <label>R$ 00,00</label>
                                        <button>Comprar</button>   -->
                            </div>

                            <div class="gallery-cell">
                                        <!-- <p>Nome do produto</p> -->
                                        <!-- <img src="./img/porca.jpg" alt="Vinho Porca"> -->
                                        <!-- <label>R$ 00,00</label>
                                        <button>Comprar</button>   -->
                            </div>

                        </div>
                    </section>
                        
                <?php  endforeach  ?>
              
            

        </main> 

        <?php include_once(__DIR__.'/includes/footer.php'); ?>
    </div>
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>