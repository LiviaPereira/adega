<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/panel.css">
    <title>Vinariam</title>
</head>
<body>

    <?php include_once('includes/header.php'); ?>
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="panel_main.php">PAINEL</a></li>
                            <li class="active"><a href="panel_orders.php">PEDIDOS</a></li>
                            <li><a href="panel_address.php">ENDEREÇOS</a></li>
                            <li><a href="panel_account_edit.php">CONTA</a></li>
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

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>