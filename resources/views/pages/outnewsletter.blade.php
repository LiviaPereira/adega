@extends('templates.institucional')
@section('content')
        <link rel="stylesheet" href="{{url('css/about.css')}}">
        <link rel="stylesheet" href="{{url('css/cart.css')}}">
        <div class="about">


            <h1>Obrigado!</h1>
            <p id="info">O email <strong> {{ $email->email }} </strong> foi removido com suesso!</p>
            <br>
            <p>Obrigado por participar da nossa lista de novidades! </p>
            <br>
  
        </div>

@endsection
