<?php session_start();
      session_destroy();
 ?>

<!DOCTYPE html>
<html>
  <head>
  	<title>Login - softStock</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="./assets/css/style.css">
  </head>
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
  							<button type="submit" id="butxton-login">entrar</button>
  						</div>
  					</form>
  				</div>
          <span>
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
  	<footer>
  		SoftStock 2021
  	</footer>
  	<script src="./assets/js/index.js"></script>
  </body>
</html>