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
                    <div class="address">
                        <strong>Alterar Endereço de Entrega</strong>

                        <div class="form-address-edit">
                            <form action="" method="post"></form>
                                <div>
                                    <label for="logradouro">Logradouro</label>
                                    <input type="text" name="logradouro" id="logradouro" required>
                                </div>
                                <div>
                                    <label for="endereco">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" required>
                                </div>
                                <div>
                                    <label for="numero">Número</label>
                                    <input type="text" name="numero" id="numero" required>
                                </div>
                                <div>
                                    <label for="complemento">Complemento</label>
                                    <input type="text" name="complemento" id="complemento" required>
                                </div>
                                <div>
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" id="cep" required>
                                </div>
                                <div>
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" id="bairro" required>
                                </div>
                                <div>
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" id="cidade" required>
                                </div>
                                <div>
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" id="estado" required>
                                </div>
                                <div class="register-submit">
                                    <button type="submit">Salvar Alterações</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>