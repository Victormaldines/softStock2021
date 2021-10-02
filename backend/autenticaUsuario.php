<?php
session_start();
$loginCliente = $_POST['login'];
$senhaCliente = $_POST['senha'];

$_SESSION['autenticado'] = false;

try {
	//$conexao = new PDO('mysql:host=localhost;dbname=softstock', $username, $password);
	require_once('conexao.php');

	//statement
	$stmt = $conexao->prepare("SELECT * FROM tbl_cliente WHERE usuario = :usuario");
	$stmt->execute(array('usuario' => $loginCliente));
	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
	
	
	if ($loginCliente === $resultado['usuario'] && $senhaCliente === $resultado['senha']) {
		$_SESSION['autenticado'] = true;
		header('Location: recuperaProdutos.php');
	} else {
		header('Location: ../index.php');
		$_SESSION['falhouLogin'] = true;
	}


} catch (PDOException $e) {
	echo "Erro: " . $e->getMessage();
}

?>