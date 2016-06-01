<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	verificaUsuario();

	$nome = $_POST['nome'];
	$usuario = idUsuarioLogado();
	$pokemon1 = $_POST['pokemon1'];
	$pokemon2 = $_POST['pokemon2'];
	$pokemon3 = $_POST['pokemon3'];
	$pokemon4 = $_POST['pokemon4'];
	$pokemon5 = $_POST['pokemon5'];
	$pokemon6 = $_POST['pokemon6'];

	if(insereTime($conexao, $usuario, $nome, $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6)) :
?>
		<p class="text-success">Time <?= $nome; ?> adicionado com sucesso!</p>
<?php
	else :
    	$msg = mysqli_error($conexao);
?>
		<p class="text-danger">O time <?= $nome; ?> não foi adicionado: <?= $usuario ?></p>
<?php
	endif
?>
	 
<?php include("rodape.php") ?>