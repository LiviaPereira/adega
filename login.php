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
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastro</title>
</head>
<body>

    <?php include_once('includes/header.php'); ?>
    
    <section id="form-register-client">

        <form action="" method="POST">

            <div id="conteiner-form">
                <br>
                <h1>Entrar</h1>
                <br>

                <div>
                    <div>
                        <label for="email">e-mail</label>
                        <br>
                        <input class="length-l" type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="senha">senha</label>
                        <br>
                        <input class="length-l" type="password" name="senha" id="senha" required>
                    </div>
                    <br>
                    <div class="register-submit">
                        <button class="length-l" type="submit">ACESSAR</button>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>