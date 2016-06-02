<?php  

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");


	$id = $_POST['id'];
	removeTipo($conexao, $id);

	header("Location: lista-tipo.php?removido=true");
	die();


	include("rodape.php");
?>