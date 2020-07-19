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
                    <a href="products.php"> <img src="img/wine/brinde.png" alt="brinde"> </a>
                </div>
                
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($featureds as $featured)
                        <div class="gallery-cell">
                            @if ($featured) 
                                <p>{{ $featured->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$featured->photo") }}')"> </div>
                                <label><strong> {{ $featured->sale_price }} </strong></label>
                                <button>Comprar</button> 
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
                    <a href="products.php"> <img src="img/beer/beer.png" alt="beer"> </a>
                </div>
                    
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($featureds as $featured)
                        <div class="gallery-cell">
                            @if ($featured) 
                                <p>{{ $featured->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$featured->photo") }}')"> </div> 
                                <label><strong> {{ $featured->sale_price }} </strong></label>
                                <button>Comprar</button> 
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
                    <a href="products.php"> <img src="img/distillate/drink.png" alt="drink">  </a>
                </div>
                    
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($featureds as $featured)
                        <div class="gallery-cell">
                            @if ($featured) 
                                <p>{{ $featured->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$featured->photo") }}')"> </div> 
                                <label><strong> {{ $featured->sale_price }} </strong></label>
                                <button>Comprar</button> 
                            @endif                                             
                        </div>        
                    @endforeach
                </div>
    
            </section>

            <section>

                <div class="titulos">
                    <hr> <h1>Não alcoólicos</h1> <hr>
                </div>

                <div class="box">
                    <a href="products.php"> <img src="img/non-alcoholic/sucao.png" alt="sucao">  </a>
                </div>
                    
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                    @foreach($featureds as $featured)
                        <div class="gallery-cell">
                            @if ($featured) 
                                <p>{{ $featured->name }}</p> 
                                <div class="imagem" style="background-image: url('{{ url("$featured->photo") }}')"> </div> 
                                <label><strong> {{ $featured->sale_price }} </strong></label>
                                <button>Comprar</button> 
                            @endif                                             
                        </div>        
                    @endforeach
                </div>

            </section> 
        </main> 
        

    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

@endsection