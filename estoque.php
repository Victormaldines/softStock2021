<?php require('backend/verificaAutenticacao.php') ?>

<!DOCTYPE html>
<html>
  <head>
  	<title>Estoque - softStock</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body class="estoque">

    <div class="container">

      <div class="screen">
        
        <header class="header">
          <div class="navigation">
            <div class="header-cadastro-produto">
              <button>cadastro de produtos</button>
            </div>
            <div class="header-estoque">
              <button class="active">estoque</button>
            </div>
          </div>
        </header>

        <section>
          <main>
            <table>
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Nome do Produto</th>
                  <th>Tipo</th>
                  <th>Quantidade</th>
                  <th>Validade</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($_SESSION['produtos'] as $produto)  { ?>
                  <tr>
                    <td><?= $produto['cod_produto'] ?></td>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['tipo'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <td><?= $produto['validade'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                
              </tfoot>
            </table>
          </main>
        </section>
      </div>
    </div>
    <footer>
      SoftStock 2021
    </footer>

  	<script src="./assets/js/estoque.js"></script>
  </body>
</html>