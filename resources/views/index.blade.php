@extends('templates.institucional')
@section('content')

    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">

    <div id="interface">        

            <div class="banner"></div>

             <section class="service">
                
                    <div><img src="./img/24horas.png" alt=""></div>
                    <div><h3>Entrega em até 24 horas</h3></div>
                    <div><img src="./img/caminhao.png" alt=""></div>
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
                    <a href="/products/wines"> <img src="img/wine/brinde.png" alt="brinde"> </a>
                </div>
                
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($wines as $wine)
                        <div class="gallery-cell">
                            @if ($wine) 
                                <p>{{ $wine->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$wine->photo") }}')"> </div>
                                <label><strong>R$ {{ number_format($wine->sale_price, 2, ',', '.') }} </strong></label>
                                <a href="./login.php">
                                    <img class="favourite" src="./img/icons/favorite.png" alt="Meus Favoritos">
                                </a>
                                <button><a href="/product/1">Ver Mais</a></button> 
                            @endif                                             
                        </div>        
                    @endforeach
                </div>

            </section>

            <section>

                <div class="titulos">
                    <hr> <h1>Cervejas</h1> <hr>
                </div>

                <div class="box">
                    <a href="/products/beers"> <img src="img/beer/beer.png" alt="beer"> </a>
                </div>
                    
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($beers as $beer)
                        <div class="gallery-cell">
                            @if ($beer) 
                                <p>{{ $beer->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$beer->photo") }}')"> </div> 
                                <label><strong>R$ {{ number_format($beer->sale_price, 2, ',', '.') }} </strong></label>
                                <a href="./login.php">
                                    <img class="favourite" src="./img/icons/favorite.png" alt="Meus Favoritos">
                                </a>
                                <button><a href="/product/1">Ver Mais</a></button> 
                            @endif                                             
                        </div>        
                    @endforeach
                </div>
                        
            </section>

                
            <section>

                <div class="titulos">
                    <hr> <h1>Destilados</h1> <hr>
                </div>

                <div class="box">
                    <a href="/products/distilleds"> <img src="img/distillate/drink.png" alt="drink">  </a>
                </div>
                    
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($distillates as $distillate)
                        <div class="gallery-cell">
                            @if ($distillate) 
                                <p>{{ $distillate->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$distillate->photo") }}')"> </div> 
                                <label><strong>R$ {{ number_format($distillate->sale_price, 2, ',', '.') }} </strong></label>
                                <a href="./login.php">
                                    <img class="favourite" src="./img/icons/favorite.png" alt="Meus Favoritos">
                                </a>
                                <button><a href="/product/1">Ver Mais</a></button> 
                            @endif                                             
                        </div>        
                    @endforeach
                </div>
    
            </section>

            <section>

                <div class="titulos">
                    <hr> <h1 = class="title" style="flex-basis: auto;">Não alcoólicos</h1> <hr>
                </div>

                <div class="box">
                    <a href="/products/nonAlcoholics"> <img src="img/non-alcoholic/sucao.png" alt="sucao">  </a>
                </div>
                    
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($nonAlcoholics as $nonAlcoholic)
                        <div class="gallery-cell">
                            @if ($nonAlcoholic) 
                                <p>{{ $nonAlcoholic->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$nonAlcoholic->photo") }}')"> </div> 
                                <label><strong>R$ {{ number_format($nonAlcoholic->sale_price, 2, ',', '.') }} </strong></label>
                                <a href="./login.php">
                                    <img class="favourite" src="./img/icons/favorite.png" alt="Meus Favoritos">
                                </a>
                                <button><a href="/product/1">Ver Mais</a></button> 
                            @endif                                             
                        </div>        
                    @endforeach
                </div>

            </section> 
        </main> 
        

    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

@endsection