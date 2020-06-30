@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="css/panel.css">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li class="active"><a href="/orders">PEDIDOS</a></li>
                            <li><a href="/address">ENDEREÇOS</a></li>
                            <li><a href="/account_edit">CONTA</a></li>
                            <li id="logout"><a href="">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <table class="table-mobile">
                        <thead>
                            <tr>
                                <td>Pedido</td>
                                <td>Data</td>
                                <td>Status</td>
                                <td>Total</td>
                                <td>Prazo de Entrega</td>
                                <td>Rastreio</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <span>Pedido<br></span> #123456</td>
                                <td> <span>Data<br></span> 01/04/2020</td>
                                <td> <span>Status<br></span> Concluído e Entregue</td>
                                <td> <span>Total<br></span> R$ 120,00</td>
                                <td> <span>Prazo de Entrega<br></span> Expresso (em 4hs)</td>
                                <td> <span>Rastreio<br></span> BR12345678IO</td>
                                <td> <span>Ações<br></span> Visualizar</td>
                            </tr>
                            <tr>
                                <td> <span>Pedido<br></span> #123456</td>
                                <td> <span>Data<br></span> 01/04/2020</td>
                                <td> <span>Status<br></span> Concluído e Entregue</td>
                                <td> <span>Total<br></span> R$ 120,00</td>
                                <td> <span>Prazo de Entrega<br></span> Expresso (em 4hs)</td>
                                <td> <span>Rastreio<br></span> BR12345678IO</td>
                                <td> <span>Ações<br></span> Visualizar</td>
                            </tr>
                            <tr>
                                <td> <span>Pedido<br></span> #123456</td>
                                <td> <span>Data<br></span> 01/04/2020</td>
                                <td> <span>Status<br></span> Concluído e Entregue</td>
                                <td> <span>Total<br></span> R$ 120,00</td>
                                <td> <span>Prazo de Entrega<br></span> Expresso (em 4hs)</td>
                                <td> <span>Rastreio<br></span> BR12345678IO</td>
                                <td> <span>Ações<br></span> Visualizar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>        
    </section>

@endsection