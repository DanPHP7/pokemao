<?php  

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-usuario.php");


	$UserID = $_POST['UserID'];
	removeUsuario($conexao, $UserID);

	header("Location: lista-usuario.php?removido=true");
	die();


	include("rodape.php");
?>
