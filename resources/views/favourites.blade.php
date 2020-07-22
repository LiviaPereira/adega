@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="{{ url('css/products.css') }}">

    <main id="produtos"> 
        <aside>
            <div>
                <h2 id="Categorias">
                    Favoritos
                </h2>
            </div>
        </aside>         

            <section id="Catalogo">

                @foreach ($produto as $item)
                    <article>
                        <p class="product-name">{{ $item->name }}</p>
                        <img class="img-produto" src="{{ url("$item->photo") }}">
                        <p>R$ {{number_format($item->sale_price, 2, ',', '.')}}</p>
                        <a class="btn" href="/product/{{ $item->id }}">COMPRAR</a>
                    </article>
                @endforeach

            </section>        

    </main>

@endsection