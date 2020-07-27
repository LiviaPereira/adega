@extends('templates.institucional')
@section('content')
        <link rel="stylesheet" href="/css/about.css">
        <div class="about">


            <h1>Obrigado!</h1>
            <p>O email <strong> {{ $email->email }} </strong> foi removido com suesso!</p>
            <br>
            <p>Obrigado por participar da nossa lista de novidades! </p>
            <br>
  
        </div>

@endsection
