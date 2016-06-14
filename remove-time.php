<?php  

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");


	$id = $_POST['id'];
	removeTime($conexao, $id);

	header("Location: form_compartilhar_e_compartilhados.php?removido=true");
	die();


	include("rodape.php");
?>
