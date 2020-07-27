@extends('templates.institucional')
@section('content')

<link rel="stylesheet" href="/css/product.css">

        <h3>{{$produto->name}}</h3>

  <section id="comprando">

    <div class="descricao">
        <p>{{$produto->description}}</p>
    </div>
    <div class="produto">
        <img class="foto" src="{{url($produto->photo)}}" alt="Imagem produto">
    </div>    
    <div class="valor">
        <a href="/favoritar/{{$produto->id}}"><img class="favourite" src="{{url('img/icons/favorite.png')}}" alt="Meus Favoritos"> Adicionar aos favoritos</a>
        <br>
        <br>
        <h6>VALOR:</h6>
        <h4> R$ {{number_format($produto->sale_price, 2, ',', '.')}}</h4>
        <h6>Este produto está disponível.</h6>

        <hr>
    <div class="comprarb">
        <button><a href="/adicionar/{{$produto->id}}">Comprar</a></button>
    </div>

  </section>

  <section id="fichat">
      <div class="titulo">
          <h4>Ficha Técnica</h4>
          <p>{{$produto->description}}</p>
      </div>

     <hr class="barra-vert">
        
      <div class="especificacoes">
          <h4>Especificações do Produto</h4>
          <p>País:<br>{{$produto->country}}</p>
          <p>Tipo:<br>{{$produto->type}}</p>
          <p>Marca:<br>{{$produto->brand}}</p>
          <p>Volume:<br>{{$produto->volume}}</p>
          <p>Teor Alcólico:<br>{{$produto->alcohol_content}}</p>
          
  </section>

@endsection