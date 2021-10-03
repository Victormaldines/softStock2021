<?php

require('verificaAutenticacao.php');

try {

	$idProduto = addSlashes($_GET['idProduto']);

	require_once('conexao.php');

	if ($idProduto) {
		$stmt = $conexao->prepare('DELETE FROM tbl_produto WHERE cod_produto = :idProduto');
		$stmt->execute(array('idProduto' => $idProduto));
	}

} catch(PDOException $e) {
	$e->getMessage();
}
	header('Location: recuperaProdutos.php');

?>