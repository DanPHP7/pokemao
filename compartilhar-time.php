<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");


	verificaUsuario();

	$idTime = $_POST['time'];
	$idAmigo = $_POST['amigo'];

	if(insereCompartilha($conexao, $idTime, $idAmigo)) :
?>
		<p class="text-success">Time compartilhado com sucesso!</p>
<?php
	else :
    	$msg = mysqli_error($conexao);
?>
		<p class="text-danger">O time não foi compartilhado: <?= $msg ?></p>
<?php
	endif
?>
	 
<?php include("rodape.php") ?>
