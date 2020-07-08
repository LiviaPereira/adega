@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="css/login.css">
    
    <section id="form-register-client">

        <form action="/login" method="POST">
        @csrf

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

@endsection