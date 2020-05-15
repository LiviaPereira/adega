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
        <br>
        <h1>Cadastre-se</h1>
        <br>
        <form action="" method="POST">

            <div id="conteiner-form">
                <div>
                    <div>
                        <label for="email">e-mail</label>
                        <br>
                        <input class="length-l" type="email" name="email" id="email" placeholder="Ex: joaodasilva@email.com" required>
                    </div>
                    <div>
                        <label for="senha">senha</label>
                        <br>
                        <input class="length-m" type="password" name="senha" id="senha" required>
                    </div>
                    <div>
                        <label for="senha-confirma">confirme sua senha</label>
                        <br>
                        <input class="length-m" type="password" name="senha-confirma" id="senha-confirma" required>
                    </div>
                    <div>
                        <label for="cpf">CPF</label>
                        <br>
                        <input class="length-m" type="text" name="cpf" id="cpf" placeholder="Ex: 123.456.789-12" required>
                    </div>
                    <div>
                        <label for="nome">seu nome e sobrenome</label>
                        <br>
                        <input class="length-l" type="text" name="nome" id="nome" placeholder="Ex: João da Silva" required>
                    </div>
                    <div>
                        <label for="nascimento">data de Nascimento</label>
                        <br>
                        <input class="length-m" type="text" name="nascimento" id="nascimento" placeholder="Ex: 01/01/1999" required>
                    </div>
                    <div>
                        <label>sexo</label>
                        <br>
                        <input type="radio" name="sexo" id=""> masculino
                        <input type="radio" name="sexo" id=""> feminino
                    </div>
                    <div>
                        <label for="telefone">telefone</label>
                        <br>
                        <input class="length-m" type="tel" name="telefone" id="telefone" placeholder="Ex: (99) 99999-9999" required>
                    </div>
                    <br>
                    <div class="register-submit">
                        <button type="submit">criar seu cadastro</button>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>