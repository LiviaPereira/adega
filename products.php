<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
</head>
<body>

   <?php include "includes/header.php";

   ?>

    <main id="produtos"> 
        <aside>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <ul>
                        <li><a class="dropdown-item" href="#">Vinhos</a></li>
                        <li><a class="dropdown-item" href="#">Destilados</a></li>
                        <li><a class="dropdown-item" href="#">Cervejas</a></li>
                        <li><a class="dropdown-item" href="#">Cachaças</a></li>
                        <li><a class="dropdown-item" href="#">Não alcoólicos</a></li>
                        <li><a class="dropdown-item" href="#">Kits</a></li>
                        <li><a class="dropdown-item" href="#">Promoções</a></li>
        
                    <ul>
                </div>
            </div>
        </aside>


        <section id="Catalogo">
            <article>
                <p>Casal Garcia Vinho Verde 750ML</p>
                <img class="img-produto" src="imagens/casalgarcia.jpg">
                <p>R$45,00</p>
                <button>COMPRAR</button>
            </article>
            
            <article>
                <p>Calamares Vinho Verde 750ML</p>
                <img class="img-produto" src="imagens/calamares.jpg">
                <p>R$40,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Vinho rosé Mateus Original 750ML</p>
                <img class="img-produto" src="imagens/mateus.jpg">
                <p>R$50,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Vinho Porca de Murça Tinto 750ML</p>
                <img class="img-produto" src="imagens/porca.jpg">
                <p>R$60,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Vinho reserva Tannat 2017 750ML</p>
                <img class="img-produto" src="imagens/tannat.jpg">
                <p>R$45,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Casal Mendes Vinho Verde 750ML</p>
                <img class="img-produto" src="imagens/mendes.jpg">
                <p>R$45,00</p>
                <button>COMPRAR</button>
            </article>
        </section>

    </main>


    <?php include "includes/footer.php";
    ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>