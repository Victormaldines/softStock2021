<?php

	require('verificaAutenticacao.php');

	try {
		require('conexao.php');

		$stmt = $conexao->prepare("SELECT * FROM tbl_produto ORDER BY cod_produto");
		$stmt->execute();
		$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$_SESSION['produtos'] = $produtos;
		
		header('Location: ../estoque.php');

	} catch (PDOException $e) {

	}

?>