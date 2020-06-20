<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Vinariam</title>
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