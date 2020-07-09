@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="css/register.css">

    <section id="form-register-client">

        <form action="/register" method="post">
        @csrf

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
                        <label for="password">Senha</label>
                        <br>
                        <input class="length-m" type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label for="confirmesenha">Confirme sua senha</label>
                        <br>
                        <input class="length-m" type="password" name="confirmesenha" id="confirmesenha" required>
                    </div>
                    <div>
                        <label for="cpf">CPF</label>
                        <br>
                        <input class="length-m" type="text" name="cpf" id="cpf" required>
                    </div>
                    <div>
                        <label for="name">Nome</label>
                        <br>
                        <input class="length-l" type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="surname">Sobrenome</label>
                        <br>
                        <input class="length-l" type="text" name="surname" id="surname" required>
                    </div>
                    <div>
                        <label for="birth">Data de Nascimento</label>
                        <br>
                        <input class="length-m" type="text" name="birth" id="birth" required>
                    </div>
                    <div>
                        <label for="gender">Sexo</label>
                        <br>
                        <input type="radio" name="gender" id="gender" value="M"> masculino
                        <input type="radio" name="gender" id="gender" value="F"> feminino
                    </div>
                    <div>
                        <label for="cellphone">Telefone</label>
                        <br>
                        <input class="length-m" type="tel" name="cellphone" id="cellphone" required>
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

@endsection