@extends('templates.institucional')
@section('content')
        <link rel="stylesheet" href="/css/about.css">
        <link rel="stylesheet" href="/css/checkOut.css">
        <style>.about{height: 300px;}</style>

        <div class="about">

            <body onload="myFunction()" style="margin:0;">

            <div id="loader"></div>

            <div style="display:none;" id="myDiv" class="animate-bottom">

                <h1>Pedido Realizado com Sucesso</h1>
                <p>Acompanhe o andamento em <a href="/panel/orders">Minha Conta</a></p>
                <p></p>

            </div>
        </div>

    <script src="/js/checkOut.js"></script>

@endsection
