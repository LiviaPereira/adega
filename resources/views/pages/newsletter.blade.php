@extends('templates.institucional')
@section('content')
        <link rel="stylesheet" href="{{url('css/about.css')}}">
        <div class="about">

        

        @if ($exists == false)

            <h1>Obrigado!</h1>
            <p>O email <strong> {{ $email }} </strong> foi inscrito com sucesso!</p>
            <br>
            <p>Você receberá todas nossas novidades. Além de ofertas, descontos e promoções especiais exclusivas para você! </p>
            <br>
            
        @else

            <h1>Erro!</h1>
            <p>O email <strong> {{ $email }} </strong> já está cadastrado!</p>
            <p>Caso queira sair da lista de novidades <a href="/newsletter/{{$id}}">clique aqui</a>.</p>
            <br>

        @endif
  
        </div>

@endsection
