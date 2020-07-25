@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/products.css') }}">    

    <main id="produtos">
    @if (count($produto) > 0)
            <aside>
                <div>
                    <h2 id="Categorias">
                        Favoritos
                    </h2>
                </div>
            </aside>         
                <section id="Catalogo">
@endif
        @foreach ($produto as $item)
                        <article>
                            <p class="product-name">{{ $item->name }}</p>
                            <img class="img-produto" src="{{ url("$item->photo") }}">
                            <p>R$ {{number_format($item->sale_price, 2, ',', '.')}}</p>
                            <div class="buttons">
                                <a class="btn" href="/product/{{ $item->id }}">Ver Mais</a>
                                <a class="btn-remove-fav" href="/remove/{{ $item->id }}">Remover</a>
                            </div>
                        </article>
        @endforeach
                </section>        
    
    @if (count($produto) === 0)
        
            <div class="empty-fav">
                <h1>Favoritos</h1>
                <p class="info">Você ainda não possuí favoritos.</p>
            </div>

    @endif


    </main>

@endsection