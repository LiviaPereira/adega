<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Vinariam</title>
</head>
<body>

    <header>
        <div id="header-box">

            <div class="top">
                <p>Adega a Jato! Pra quem tem pressa de beber!</p>
            </div>

            <div id="header-conteiner">
                <div class="logo-site">
                    <a href="/">
                        <img class="logo-desktop" src="./img/logo/logo_vinariam.png" alt="Logo do Site">
                    </a>
                </div>
                <div class="header-input-box">
                    <input type="text" name="search" placeholder="Procurar...">
                    <button type="submit">BUSCAR</button>
                </div>

                <div>
                    <img class="header-img-user-mobile" src="./img/icons/user2.png" alt="Acesso do Usuário">
                    <div class="header-enter">
                    @auth
                        
                    <p>Olá, {{ auth()->user()->name }}</p>
                    <a href="/panel"><p>Minha Conta</p></a>
                    @endauth
                    @guest
                    <a href="/login"><p>Entre</p></a>
                    <a href="/register"><p>ou Crie Sua conta</p></a>
                    @endguest
                    </div>
                </div>




                <div class="header-favorite">
                    <a href="/login">
                    <img class="header-img-user-mobile" src="./img/icons/favorite.png" alt="Meus Favoritos"><p>Favoritos</p>
                    </a>
                </div>
                <div class="header-shopping-cart">
                        <a href="/shoppingCart">
                            <img src="img/icons/cart_mobile.png" alt="Carrinho de Compras">
                        </a>
                        <div>
                            <p>2</p>
                        </div>
                    </div>


            </div>

            <!-- INICIO DO HEADER MOBILE -->

            <div class="header-mobile">
                <div class="container-mobile">
                    
                    <a href="/">
                        <img class="header-logo-mobile" src="./img/logo/logo_mobile.png" alt="Logo do Site">
                    </a>
                    <div style="display: inherit">
                        <div id="dropdown">
                            <img class="header-img-user-mobile" src="./img/icons/user2.png" alt="Acesso do Usuário">
                            <div id="dropdown-content">
                                <a href="/panel">Minha Conta</a>
                                <a href="/login">Entre</a>
                                <a href="/register">Cadastre-se</a>
                            </div>
                        </div>
                        <div class="header-favorite">
                            <a href="/login">
                            <img class="header-img-user-mobile" src="./img/icons/favorite.png" alt="Meus Favoritos">
                            </a>
                        </div>
                        <div class="header-shopping-cart">
                            <a href="/shoppingCart">
                                <img src="img/icons/cart_mobile.png" alt="Carrinho de Compras">
                            </a>
                            <div>
                                <p>02</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-search-mobile">
                    <input type="text" name="search" placeholder="Procurar...">
                    <button type="submit">BUSCAR</button>
                </div>
            </div>

            <!-- FIM DO HEADER MOBILE -->

            
            <div id="nav-conteiner">
                <nav>
                        <div>
                            <a href="#">
                                <img id="header-categories-img" src="./img/categories/wine.png" alt="">
                                <p id="header-categories">VINHOS</p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img id="header-categories-img" src="./img/categories/beer.png" alt="">
                                <p id="header-categories">CERVEJAS</p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img id="header-categories-img" src="./img/categories/whiskey.png" alt="">
                                <p id="header-categories">DESTILADOS</p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img id="header-categories-img" src="./img/categories/soda.png" alt="">
                                <p id="header-categories">NÃO ALCOÓLICOS</p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img id="header-categories-img" src="./img/categories/kits.png" alt="">
                                <p id="header-categories">KIT'S</p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img id="header-categories-img" src="./img/categories/sales.png" alt="">
                                <p id="header-categories">PROMOÇÕES</p>
                            </a>
                        </div>
                </nav>
            </div>
        </div>
    </header>

        <main>
            @yield('content')
        </main>


    <footer>

        <div id="footer-newsletter">
            <h1>Receba novidades em seu e-mail</h1>
                <div>
                    <form action="/newsletter" method="POST">
                    @csrf
                        <input id="footer-input-newsletter" type="email" name="emailnewsletter" placeholder="Digite seu e-mail">
                        <button id="footer-submit-newsletter" type="submit">CADASTRAR</button>
                    </form>
                </div>
        </div>
    
        <div id="footer-conteiner">
    
            <div id="footer-itens">
                <ul>
                    <li><p class="categories">Categorias</p></li>
                    <li><a href="/wines">Vinhos</a></li>
                    <li><a href="/beers">Cervejas</a></li>
                    <li><a href="/distilleds">Destilados</a></li>
                    <li><a href="/nonAlcoholics">Não Alcoólicos</a></li>
                    <li><a href="/kits">Kit's</a></li>
                    <li><a href="/promotions">Promoções</a></li>
                </ul>
            </div>
    
            <div id="footer-itens">
                <ul>
                    <li><p class="categories">Ajuda</p></li>
                    <li><a href="/about">Quem Somos</a></li>
                    <li><a href="/panel">Minha Conta</a></li>
                    <li><a href="">Formas de Entrega</a></li>
                    <li><a href="">Troca e Devoluções</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>
    
            <div id="footer-itens">
                <ul class="social">
                    <li><p class="categories">Nossas Redes</p></li>
                    <li><a href=""><img id="footer-social-icons" src="img/icons/ico-instagram.png" alt=""><p> Instagram</p></a></li>
                    <li><a href=""><img id="footer-social-icons" src="img/icons/ico-twitter.png" alt=""><p> Twitter</p></a></li>
                    <li><a href=""><img id="footer-social-icons" src="img/icons/ico-facebook.png" alt=""><p> Facebook</p></a></li>
                </ul>
            </div>
    
            <div id="footer-itens">
                <p class="under-age"><img class="ico-18" src="img/icons/ico-18.png" alt="">VENDA PROIBÍDA PARA MENORES DE 18 ANOS.</p>
                <img class="logo" src="img/logo/logo_vinariam.png" alt="">
                <p class="contacts">Telefone: (11) 91234-5678</p>
                <p class="contacts">E-mail: contato@vinariam.com.br</p>
                <p class="contacts">Endereço: Rua Sempre Verde, 742 - Springfield</p>
    
            </div>
    
        </div>
    
        <div id="footer-content">
            <p>
                Preços, ofertas e condições exclusivas para internet e válidos durante o 
                dia de hoje, podendo sofrer alterações sem prévia notificação.
            </p>
         </div>
    
    </footer>

</body>
</html>