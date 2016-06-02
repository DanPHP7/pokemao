<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-usuario.php");

	verificaUsuario();

	$UserName = $_POST['UserName'];
	$Senha = $_POST['Senha'];
	$Administrador = $_POST['Administrador'];

	if(insereUsuario($conexao, $UserName, $Senha, $Administrador)) :
?>
		<p class="text-success">Usuário <?= $UserName; ?> adicionado com sucesso!</p>
<?php
	else :
    	$msg = mysqli_error($conexao);
?>
		<p class="text-danger">O usuário <?= $UserName; ?> não foi adicionado: <?= $msg ?></p>
<?php
	endif
?>
	 
<?php include("rodape.php") ?>
