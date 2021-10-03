<?php require('backend/verificaAutenticacao.php') ?>

<!DOCTYPE html>
<html>

  <?php
    $pagina = 'Cadastro de Produtos';
    require('backend/interface/carregaHead.php');
  ?>

  <body class="cadastro-produto">

    <div class="container">
      <div class="screen">

        <?php require('backend/interface/carregaHeader.php') ?>

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
                <div>
                  <label>produtos cadastrados recentemente:</label>
                </div>
                
                <div class="lista-produtos">
                  <ul></ul>
                </div>
              </div>
            </div>

          </main>
        </section>

      </div>
    </div>

    <?php require('backend/interface/carregaFooter.php') ?>

  	<script src="assets/js/cadastroProduto.js"></script>

  </body>
</html>