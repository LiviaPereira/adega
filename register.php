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
    

    <section class="form-register-client">

        <h1>Cadastre-se</h1>

        <form action="" method="POST">

            <div class="conteiner-form">
                
                <div class="conteiner-form-item dados-acesso">
                    <div>
                        <p>Dados de Acesso</p>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <br>
                        <input type="email" name="email" id="email" placeholder="usuario@email.com" required>
                    </div>
                    <div>
                        <label for="senha">Senha</label>
                        <br>
                        <input type="password" name="senha" id="senha" required>
                    </div>
                    <div>
                        <label for="senha-confirma">Confirme sua senha</label>
                        <br>
                        <input type="password" name="senha-confirma" id="senha-confirma" required>
                    </div>
                </div>

                <div class="conteiner-form-item dados-pessoais">
                    <div>
                        <p>Dados Pessoais</p>
                    </div>
                    <div>
                        <label for="cpf">CPF</label>
                        <br>
                        <input type="text" name="cpf" id="cpf" placeholder="123.456.789-12" required>
                    </div>
                    <div>
                        <label for="nome">Nome</label>
                        <br>
                        <input type="text" name="nome" id="nome" placeholder="João" required>
                    </div>
                    <div>
                        <label for="sobrenome">Sobrenome</label>
                        <br>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="da Silva" required>
                    </div>
                    <div>
                        <label for="nascimento">Data de Nascimento</label>
                        <br>
                        <input type="text" name="nascimento" id="nascimento" placeholder="01/01/1999" required>
                    </div>
                    <div>
                        <label>Sexo</label>
                        <br>
                        <select name="sexo" id="sexo" required>
                            <option value="">Escolha uma opção</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <br>
                        <input type="tel" name="telefone" id="telefone" placeholder="(99) 99999-9999" required>
                    </div>
                </div>

                <div class="conteiner-form-item dados-entrega">
                    <div>
                        <p>Dados de Entrega</p>
                    </div>
                    <div>
                        <label for="cep">CEP</label>
                        <br>
                        <input type="text" name="cep" id="cep" placeholder="01234-567" required>
                    </div>
                    <div>
                        <label for="endereco">Endereço</label>
                        <br>
                        <input type="text" name="endereco" id="endereco" required>
                    </div>
                    <div>
                        <label for="numero">Número</label>
                        <br>
                        <input type="text" name="numero" id="numero" required>
                        <br>
                        <label for="complemento">Complemento</label>
                        <br>
                        <input type="text" name="complemento" id="complemento">
                    </div>
                    <div>
                        <label for="bairro">Bairro</label>
                        <br>
                        <input type="text" name="bairro" id="bairro" required>
                    </div>
                </div>

                <div class="conteiner-form-item button-register-submit">
                    <div>
                        <button type="submit">Criar Cadastro!</button>
                    </div>
                </div>
                
            </div>
        </form>
    </section>

    
</body>
</html>