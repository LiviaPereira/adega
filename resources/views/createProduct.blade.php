@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="/css/createProduct.css">

    <h1>Seja bem vind(o) </h1>
    <div class="container">
        <h1>Cadastrar Produto</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="campos espacamento">
                <label for="nome">Nome
                     <input type="text" name="nome" id="name" value="{{--  {{ $name }} --}}"> 
                    {{-- {{ ($nameOk ? '' : '<span class="erro">Preencha o campo com um nome válido</span>') }}  --}}
                </label>    
            </div>
            <div class="campos espacamento">
                <label for="categoria">Categoria
                    <select name="categoria" id="categoria" value=" ">
                        <option selected disabled>Selecione uma categoria</option>
                          {{-- @foreach ($products as $product) --}}
                             <option>{{-- {{ $product['categoria'] }} --}}</option>       
                         {{-- @endforeach                    --}}
                    </select>
                </label>
            </div>
            <div class="campos espacamento">
                <label for="descricao">Descrição
                    <textarea name="descricao" cols="30" rows="5" value="{{--{{ $descricao }} --}}  ">
                    </textarea>
                </label>    
            </div>
            <div class="campos espacamento">
                <label for="estoque">Quantidade</label>
                <input type="number" name="estoque" id="estoque" value="{{-- {{ $quantidade }}--}}    ">
            </div>
            <div class="campos espacamento">
                <label for="price">Preço</label>
                <input type="number" name="price" value=" {{--{{ $preco }} --}} ">
                {{-- {{ ($precoOk ? '' : '<span class="erro">Informe um valor numerico</span>'); }} --}}
            </div>

            
            <div class="campos espacamento fileContainer">
                <img src="img/no-image.png" alt="Imagem Selecionada" id="preview">
                <div>Click para escolher uma imagem</div>
                <input type="file" name="foto" id="foto" >
                {{--  @if (!$fotoOk)
                    <span class="errorUpload">Selecione um arquivo válido</span>
                @endif  --}}
                  
            </div>

            <div class="controles">
                <button type="reset">Reset</button>
                <a href="">Ver lista de produtos.</a>
                <button type="submit">Enviar</button>
            </div>
       
        </form>
        
    </div>

    <script>
        (() => {

            let src = document.getElementById("foto");
            var target = document.getElementById("preview");

            // Criando um objeto fileReader
            var fr = new FileReader();

            // Quando o file reader carregar o arquivo, atribua ao src da imagem
            // o arquivo carregado
            fr.onload = function(e) { target.src = this.result; };

            // Quando houver alteração no input file fazer com que o
            // file reader leia o arquivo selecionado
            src.addEventListener("change", function() {
                fr.readAsDataURL(src.files[0]);
            });
        })();
    </script>

@endsection