@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="/css/products.css">

    <main id="produtos"> 

    @if (count($list) === 0)

        <div class="empty-fav">
            <h1>Resultados da pesquisa por: "{{$pesquisa}}"</h1>
            <p class="info">Nenhum produto foi encontrado para a sua seleção.</p>
        </div>

    @else

            <aside>
                <div>
                    <h2 id="Categorias">
                        Busca
                    </h2>
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
            {{-- {{ $list->links() }} --}}
            </section>


    @endif

    </main>

@endsection