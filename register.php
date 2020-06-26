<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Vinariam</title>
</head>
<body>

    <?php include_once('includes/header.php'); ?>
    
    <section id="form-register-client">

        <form action="" method="POST">

            <div id="conteiner-form">
                <br>
                <h1>Cadastre-se</h1>
                <br>

                <div>
                    <div>
                        <label for="email">E-mail</label>
                        <br>
                        <input class="length-l" type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="senha">Senha</label>
                        <br>
                        <input class="length-m" type="password" name="senha" id="senha" required>
                    </div>
                    <div>
                        <label for="senha-confirma">Confirme sua senha</label>
                        <br>
                        <input class="length-m" type="password" name="senha-confirma" id="senha-confirma" required>
                    </div>
                    <div>
                        <label for="cpf">CPF</label>
                        <br>
                        <input class="length-m" type="text" name="cpf" id="cpf" required>
                    </div>
                    <div>
                        <label for="nome">Nome</label>
                        <br>
                        <input class="length-l" type="text" name="nome" id="nome" required>
                    </div>
                    <div>
                        <label for="sobrenome">Sobrenome</label>
                        <br>
                        <input class="length-l" type="text" name="sobrenome" id="sobrenome" required>
                    </div>
                    <div>
                        <label for="nascimento">Data de Nascimento</label>
                        <br>
                        <input class="length-m" type="text" name="nascimento" id="nascimento" required>
                    </div>
                    <div>
                        <label for="sexo">Sexo</label>
                        <br>
                        <input type="radio" name="sexo" id="sexo"> masculino
                        <input type="radio" name="sexo" id="sexo"> feminino
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <br>
                        <input class="length-m" type="tel" name="telefone" id="telefone" required>
                    </div>
                    <br>
                    <div class="register-submit">
                        <button class="length-l" type="submit">CRIAR CADASTRO</button>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>