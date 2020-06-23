<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
	<link rel="icon" href="img/fav.ico">
</head>
<body>

<header>
    <?php include "includes/header.php"; ?>
</header>

<main>
  <section id="comprando">
    <div class="descricao">
        <h3>Xarope Monin Blue Curacao 700ml</h3>
        <h6>Avaliação</h6>
        <p>Blue Curaçao é um licor doce e levemente amargo, elaborado originalmente da casca de laranjas encontradas em Curaçao...</p>
        <br><a href="">MAIS DETALHES</a>
    </div>
    <div class="produto">
        <img class="foto" src="./img/wine/casalgarcia.jpg" alt="Imagem produto">
    </div>    
    <div class="valor">
        <h6>VALOR:</h6>
        <h4>R$ 49,90</h4>
        <br><br><a href="">OPÇÕES DE PARCELAMENTO</a>
        <hr>
    <div class="comprarb">
        <button>Comprar</button>
    </div>
    <div class="cep">
        <label for=“calcf”>Calcular o valor do frete:</label><br>
        <input type=“text”” name="calcf" id="calcf" placeholder=“00000-000” required>
        <button>Ok</button>
    </div>
  </section>

  <section id="fichat">
      <div class="titulo">
          <h4>Ficha Técnica</h4>
          <p>Blue Curaçao é um licor doce e levemente amargo, elaborado originalmente da casca de laranjas encontradas em Curaçao, uma ilha do Caribe. Sua cor é tipicamente usada para conferir um tom azulado aos coquetéis. Com um leve sabor da casca da laranja e uma linda coloração azul, Monin Blue Curaçao não é alcoólico e oferece uma grande versatilidade. Sua utilização vai muito além do bar, com aplicações que incluem limonadas, sodas e mais.</p>
      </div>

     <hr>
        
      <div class="especificacoes">
          <h4>Especificações do Produto</h4>
          <p>País:<br>Brasil</p>
          <p>Tipo:<br>Curaçau Blue</p>
          <p>Marca:<br>Stock</p>
          <p>Volume:<br>720 ml</p>
          <p>Teor Alcólico:<br>39%</p>
          
  </section>

  <section id="titulol">
      <div>
          <h4>QUEM COMPROU TAMBÉM LEVOU</h4>
      </div>
  </section>

  <section id="levou">

      <div class="wine1">
          <p class="product">Licor Cointreau 700ml</p>
          <img src="./img/pack_bud.png" alt="Produto">
          <h6>Avaliação</h6>
          <h5>R$ 94,90</h5>
          <button>Comprar</button>
      </div>

      <div class="wine2">
          <p class="product">Tequila Jose Cuervo Especial 750ml</p>
          <img src="./img/absolut.png" alt="Produto">
          <h6>Avaliação</h6>
          <h5>R$ 84,90</h5>
          <button>Comprar</button>
      </div>

      <div class="wine3">
          <p class="product">Licor Stock Peach 720ml</p>
          <img src="./img/redbull.jpg" alt="Produto">
          <h6>Avaliação</h6>
          <h5>R$ 38,90</h5>
          <button>Comprar</button>
      </div>
  </section>

  <section id="titulol">
      <div>DEIXE SUA OPINIÃO</div>
  </section>
    
  <section id="avaliacao">
      <div>
        <h4>Avaliação do Produto</h4>
        <hr><br>
        <p>(Avalie agora!)</p><br>
        <label  for=“comentarios”>Avaliação</label>
        <br>
        <textarea name=“comentarios” id=“comentarios”>Deixe sua avaliação do produto</textarea>
        <br><br>
        <label for=“indicacao”>Você recomenda este produto?</label> <br>
        <label for=“sim”><input type='radio' name=“indicacao” id=“sim”>SIM</label>
        <label for=“nao”><input type='radio' name=“indicacao” id=“nao”>NÃO</label>
        <br>
        <h4>Seus dados</h4>
        <hr><br>
        <label  for=“nomecompleto”>Entre com seu nome (como vai exibir no site)</label><br>
        <input type=“text” name=“nomecompleto” id=“nomecompleto” placeholder=“Nome">
        <br>
        <button>Enviar avaliação</button>
    </div>
  </section>

  <section id="titulol">
      <div>ESCLAREÇA SUAS DÚVIDAS</div>
  </section>

  <section id="pergunta">
      <div>
      <br>
      <label for=“comentarios”>Tem alguma dúvida sobre este produto? Pergunte ao lojista e a outros compradores!</label><br>
      <textarea name=“comentarios” id=“comentarios” rows=“8” cols=“80”>Pergunte sobre o produto, como utilizá-lo ou peça alguma coisa</textarea>
      </div>
      <button>Enviar pergunta</button>
  </section>
  <hr id="final">


    
<footer>
<?php include "includes/footer.php"; ?>
</footer>

</body>
</html>