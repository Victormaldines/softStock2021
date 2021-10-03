<?php
	session_start();

	switch ($_GET['tipoMsg']) {
		case 'cadastroSucesso':
			$classe	 = 'aviso success';
			$mensagem = 'Produto cadastrado com sucesso!';
			break;
			
		case 'campoVazio':
			$classe = 'aviso warning';
			$mensagem = 'Preencha todos os campos...';
			break;
	}

	$_SESSION['msgUsuario'] = [
		'visivel' => true,
		'classe' => $classe,
		'mensagem' => $mensagem
	];

	header('location: ../../cadastro-produto.php');		
?>