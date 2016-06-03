<?php  

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");


	$id = $_POST['id'];
	removePokemon($conexao, $id);

	header("Location: lista-pokemon.php?removido=true");
	die();


	include("rodape.php");
?>
