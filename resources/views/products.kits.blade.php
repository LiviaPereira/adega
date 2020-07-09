@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="css/products.css">
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
        @foreach ($list as $item)
        <article>
                <p>{{ $item->name }}</p>
                <img class="img-produto" src="{{ $item->photo }}">
                <p>R$ {{ $item->sale_price }}</p>
                <button>COMPRAR</button>
            </article>
            
        @endforeach
            
        </section>

    </main>
    
@endsection