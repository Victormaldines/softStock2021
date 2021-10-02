<?php require('backend/verificaAutenticacao.php') ?>

<!DOCTYPE html>
<html>
  <head>
  	<title>Cadastro de Produto - softStock</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body class="cadastro-produto">

    <div class="container">

      <div class="screen">

        <header class="header">
          <div class="navigation">
            <div class="header-cadastro-produto">
              <button class="active">cadastro de produtos</button>
            </div>
            <div class="header-estoque">
              <button>estoque</button>
            </div>
          </div>
        </header>

        <section>
          <main>
            <div>

              <form method="POST" action="backend/cadastraProduto.php">
                <div>
                  <label>nome do produto:</label>
                  <input type="text" placeholder="Insira o nomero do produto" id="nome" name="nome">
                </div>
                <div>
                  <label>tipo:</label>
                  <select id="tipo" name="tipo">
                    <option value="">Selecione uma opção</option>
                    <option value="fruta">Fruta</option>
                    <option value="laticínio">Laticínio</option>
                    <option value="cereal">Cereal</option>
                  </select>
                </div>
                <div>
                  <label>quantidade:</label>
                  <input type="number" placeholder="0" id="quantidade" name="quantidade">
                </div>
                <div>
                  <label>validade:</label>
                  <input type="date" id="validade" name="validade">
                </div>
                <div>
                  <button type="submit" id="btn-cadastrar">cadastrar</button>
                </div>
              </form>

            </div>

            <div>
              <div class="container-lista-produtos">
                <div><label>produtos cadastrados recentemente:</label></div>
                <div class="lista-produtos">

                  <ul>
                  </ul>

                </div>
              </div>
            </div>
          </main>
        </section>
      </div>
    </div>
    <footer>
      SoftStock 2021
    </footer>

  	<script src="assets/js/cadastroProduto.js"></script>
  </body>
</html>