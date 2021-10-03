<?php

require('verificaAutenticacao.php');

try {

	$nome = addslashes($_POST['nome']);
	$tipo = addslashes($_POST['tipo']);
	$quantidade = addslashes($_POST['quantidade']);
	$validade = addslashes($_POST['validade']);

	$valido = !empty($nome) && !empty($tipo) && !empty($quantidade) && !empty($validade);

	if ($valido) {
		require_once('conexao.php');

		$stmt = $conexao->prepare("INSERT INTO tbl_produto (nome, tipo, quantidade, validade)
								   VALUES (:nome, :tipo, :quantidade, :validade)");

		$stmt->execute(array('nome' => $nome, 'tipo' => $tipo, 'quantidade' => $quantidade, 'validade' => $validade));
	}
	
	header('Location: ../cadastro-produto.php');
} catch (PDOException $e) {
	echo 'Erro: ' . $e->getMessage();
}

?>