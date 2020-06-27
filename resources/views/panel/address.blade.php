@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="css/panel.css">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li><a href="/orders">PEDIDOS</a></li>
                            <li class="active"><a href="/address">ENDEREÇOS</a></li>
                            <li><a href="/account_edit">CONTA</a></li>
                            <li id="logout"><a href="">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <p>O endereço a seguir será utlizado na página de finalizar pedido como endereço padrão, mas é possível modificá-lo durante a finalização do pedido.</p>
                    <br>
                    <div class="address">
                        <strong>Endereço de entrega</strong>
                        <ul>
                            <li>Murillo Maciel de Arruda</li>
                            <li>Rua dos Programadores, 500</li>
                            <li>Apto 21</li>
                            <li>Santana</li>
                            <li>São Paulo</li>
                            <li>São Paulo</li>
                            <li>02020-000</li>
                        </ul>

                        <p><a href="/address_edit">Editar Endereço</a></p>

                    </div>

                </div>
    </section>

@endsection