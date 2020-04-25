<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
                    <div></div>
                    <div><h1>Entrega em até 24 horas</h1></div>
                    <div></div>
                    <div><h1>Frete Grátis</h1></div>
                    <div></div>
                    <div class="basis"><h1>Maior Segurança na sua compra</h1></div>
            </section>

        <main>
            
            <div class="titulos">
                <hr> <h1>Vinhos</h1> <hr>
            </div>

            <section class="products">

                <div class="box">
                    
                </div>
                
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                    <div class="gallery-cell">
                        <label>R$ 00,00</label>
                        <button>Comprar</button>
                    </div>

                    <div class="gallery-cell">
                        <label>R$ 00,00</label>
                        <button>Comprar</button>
                    </div>

                    <div class="gallery-cell">
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
                    
            </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
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
                    
            </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
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
                    
            </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <label>R$ 00,00</label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
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