<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- montserrat-regular-400 -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <!-- amita-regular-400 -->
    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Cadastro</title>
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
                        <label for="nome">Nome e sobrenome</label>
                        <br>
                        <input class="length-l" type="text" name="nome" id="nome" required>
                    </div>
                    <div>
                        <label for="nascimento">Data de Nascimento</label>
                        <br>
                        <input class="length-m" type="text" name="nascimento" id="nascimento" required>
                    </div>
                    <div>
                        <label>Sexo</label>
                        <br>
                        <input type="radio" name="sexo" id=""> masculino
                        <input type="radio" name="sexo" id=""> feminino
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <br>
                        <input class="length-m" type="tel" name="telefone" id="telefone" required>
                    </div>
                    <br>
                    <div class="register-submit">
                        <button type="submit">Criar Cadastro</button>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>