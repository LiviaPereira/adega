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
                                <img class="imagem" src="{{ url("$featured->photo") }}" >  
                                <label><strong> {{ $featured->sale_price }} </strong></label>
                                <button>Comprar</button> 
                            @endif                                             
                        </div>        
                    @endforeach

                    {{-- {{-- <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/mateus.jpg');"></div>  
                        <label><strong>R$ 60,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/tannat.jpg');"></div>  
                        <label><strong>R$ 45,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/mendes.jpg');"></div>  
                        <label><strong>R$ 35,90</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/porca.jpg');"></div> 
                        <label><strong>R$ 42,90</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/mateus.jp');"></div> 
                        <label><strong>R$ 120,00</strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/tannat.jp');"></div> 
                        <label> <strong> R$ 70,00 </strong></label>
                        <button>Comprar</button> 
                    </div>

                    <div class="gallery-cell">
                        <p>Nome do produto</p>
                        <div class="imagem" style="background-image: url('img/wine/mendes.jp');"></div> 
                        <label><strong>R$ 69,90</strong></label>
                        <button>Comprar</button> 
                    </div> --}}
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
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/packazul.png');"></div>  
                            <label><strong>R$ 29,90</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/pack_bud.png');"></div>  
                            <label><strong>R$ 29,90</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/corona.png');"></div>  
                            <label><strong>R$ 6,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/bud.jpg');"></div>  
                            <label><strong>R$ 3,99</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/cervejaasahl.png');"></div>  
                            <label><strong>R$ 3,50</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/cooler.png');"></div>  
                            <label><strong>R$ 65,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/gt.png');"></div>  
                            <label><strong>R$ 8,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/beer/heineken.png');"></div>  
                            <label><strong>R$ 4,99</strong></label>
                            <button>Comprar</button>
                        </div>
                        
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
                    <div class="gallery-cell">
                            <p>Nome do produto</p>
                             <div class="imagem" style="background-image: url('img/distillate/pngbarn.png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/distillate/jack.png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/distillate/black.png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/distillate/whiskey.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/distillate/');"></div> 
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/distillate/smirnoff.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/distillate/pngbarn(11).png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('');"></div>   
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
                    <a href="products.php"> <img src="img/non-alcoholic/sucao.png" alt="sucao">  </a>
                </div>
                    
                    <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "groupCells": true, "freeScroll": true }'>
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/coca.png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/pepsi.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/soda-09.png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/dobemcoco.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/h2o.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/pepsi.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/laranja.png');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>
    
                        <div class="gallery-cell">
                            <p>Nome do produto</p>
                            <div class="imagem" style="background-image: url('img/non-alcoholic/dobemcoco.jpg');"></div>   
                            <label><strong>R$ 00,00</strong></label>
                            <button>Comprar</button>
                        </div>

                    </div>

            </section> 
        </main> 


    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

@endsection