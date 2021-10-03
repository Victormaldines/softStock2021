<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html>

  <?php
    $pagina = 'Login';
    require('backend/interface/carregaHead.php');
  ?>

  <body class="index">

  	<section>
  		<main>

  			<div class="brand">
  				<h1 style="font-weight: normal">SoftStock</h1>
  			</div>

  			<div id="box">

  				<div class="box">
  					<form method="POST" action="backend/autenticaUsuario.php">
  						<div>
  							<label for="login">login:</label>
  							<input type="text" name="login" id="login" placeholder="insira o login...">
  						</div>

  						<div>
  							<label for="senha">senha:</label>
  							<input type="password" name="senha" id="senha" placeholder="insira a senha...">
  						</div>

  						<div>
  							<button type="submit" id="button-login">entrar</button>
  						</div>
  					</form>
  				</div>

          <span class="aviso-usuario">

            <?php

              if (empty($_SESSION['falhouLogin'])) $_SESSION['falhouLogin'] = false;

              if ($_SESSION['falhouLogin']) {
                echo 'Usuário ou senha inválidos';
                $_SESSION['falhouLogin'] = false;
              }
            ?>

          </span>

  			</div>

  		</main>
  	</section>

  	<?php require('backend/interface/carregaFooter.php') ?>

  	<script src="./assets/js/index.js"></script>

  </body>
</html>