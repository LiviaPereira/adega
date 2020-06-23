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
                            <li><a href="panel_orders.php">PEDIDOS</a></li>
                            <li class="active"><a href="panel_address.php">ENDEREÇOS</a></li>
                            <li><a href="panel_account_edit.php">CONTA</a></li>
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

                        <p><a href="panel_address_edit.php">Editar Endereço</a></p>

                    </div>

                </div>
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>