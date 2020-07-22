@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/products.css') }}">

    <main id="produtos"> 
        <aside>
            <div>
                <h2 id="Categorias">
                    Categorias
                </h2>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <ul>
                        <li><a class="dropdown-item" id="Categoria" href="/products/wines">Vinhos</a></li>
                        <li><a class="dropdown-item" id="Categoria" href="/products/beers">Cervejas</a></li>
                        <li><a class="dropdown-item" id="Categoria" href="/products/distilleds">Destilados</a></li>
                        <li><a class="dropdown-item" id="Categoria" href="/products/nonAlcoholics">Não alcoólicos</a></li>
                        {{--  <li><a class="dropdown-item" id="Categoria" href="/products/kits">Kits</a></li>
                        <li><a class="dropdown-item" id="Categoria" href="/products/promotions">Promoções</a></li>  --}}
                    <ul>
                </div>
            </div>
        </aside>


        <section id="Catalogo">

            @foreach ($list as $item)
                <article>
                    <p class="product-name">{{ $item->name }}</p>
                    <img class="img-produto" src="{{ url("$item->photo") }}">
                    <p>R$ {{number_format($item->sale_price, 2, ',', '.')}}</p>
                    <a class="btn" href="/product/{{ $item->id }}">Ver Mais</a>
                </article>
            @endforeach

        </section>
    </main>

@endsection