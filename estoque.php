<?php require('backend/verificaAutenticacao.php') ?>

<!DOCTYPE html>
<html>

  <?php
    $pagina = 'Estoque';
    require('backend/interface/carregaHead.php');
  ?>

  <body class="estoque">

    <div class="container">
      <div class="screen">
        
        <?php require('backend/interface/carregaHeader.php') ?>

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
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php foreach ($_SESSION['produtos'] as $produto)  { ?>
                  <tr>
                    <td id="<?= $produto['cod_produto'] ?>"><?= $produto['cod_produto'] ?></td>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['tipo'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <td><?= $produto['validade'] ?></td>
                    <td><button class="fas fa-times btn-del-produto"></button></td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>

          </main>
        </section>

      </div>
    </div>

    <?php require('backend/interface/carregaFooter.php') ?>

  	<script src="./assets/js/estoque.js"></script>
    
  </body>
</html>