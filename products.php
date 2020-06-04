<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/products.css">
    <title>Vinariam</title>
</head>
<body>

   <?php include "includes/header.php";?>

    <main id="produtos"> 
        <aside>
            <div>
                <h2 id="Categorias">
                    Categorias
                </h2>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <ul>
                        <li><a class="dropdown-item" id="Categoria1" href="#">Vinhos</a></li>
                        <li><a class="dropdown-item" id="Categoria2" href="#">Destilados</a></li>
                        <li><a class="dropdown-item" id="Categoria3" href="#">Cervejas</a></li>
                        <li><a class="dropdown-item" id="Categoria4" href="#">Cachaças</a></li>
                        <li><a class="dropdown-item" id="Categoria5" href="#">Não alcoólicos</a></li>
                        <li><a class="dropdown-item" id="Categoria6" href="#">Kits</a></li>
                        <li><a class="dropdown-item" id="Categoria7" href="#">Promoções</a></li>
        
                    <ul>
                </div>
            </div>
        </aside>


        <section id="Catalogo">
            <article>
                <p>Casal Garcia Vinho Verde 750ML</p>
                <img class="img-produto" src="img/casalgarcia.jpg">
                <p>R$45,00</p>
                <button>COMPRAR</button>
            </article>
            
            <article>
                <p>Calamares Vinho Verde 750ML</p>
                <img class="img-produto" src="img/calamares.jpg">
                <p>R$40,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Vinho rosé Mateus Original 750ML</p>
                <img class="img-produto" src="img/mateus.jpg">
                <p>R$50,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Vinho Porca de Murça Tinto 750ML</p>
                <img class="img-produto" src="img/porca.jpg">
                <p>R$60,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Vinho reserva Tannat 2017 750ML</p>
                <img class="img-produto" src="img/tannat.jpg">
                <p>R$45,00</p>
                <button>COMPRAR</button>
            </article>
            <article>
                <p>Casal Mendes Vinho Verde 750ML</p>
                <img class="img-produto" src="img/mendes.jpg">
                <p>R$45,00</p>
                <button>COMPRAR</button>
            </article>
        </section>

    </main>


    <?php include "includes/footer.php"; ?>


</body>
</html>