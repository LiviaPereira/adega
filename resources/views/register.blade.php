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
                        <input oninput="mascara(this, 'cpf')" class="length-m" type="text" name="cpf" id="cpf" required>
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
                        <input class="length-m" type="date" name="birth" id="birth" placeholder="DD/MM/AAAA" required>
                    </div>
                    <div>
                        <label for="gender">Sexo</label>
                        <br>
                        <input type="radio" name="gender" id="gender" value="M"> masculino
                        <input type="radio" name="gender" id="gender" value="F"> feminino
                    </div>
                    <div>
                        <label for="cellphone">Celular</label>
                        <br>
                        <input oninput="mask(this, mphone)" class="length-m" type="text" name="cellphone" id="cellphone" placeholder="(xx) xxxxx-xxxx" required>
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

    <script>
    function mascara(i,t){
    
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
        return;
    }
    

    if(t == "cpf"){
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
    }

    }

    function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

    function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}
    </script>

@endsection