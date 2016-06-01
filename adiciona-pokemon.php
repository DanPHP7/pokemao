<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	verificaUsuario();

	$nome = $_POST['nome'];
	$url = $_POST['url'];
	$descricao = $_POST['descricao'];
	$tipo1 = $_POST['tipo1'];
	$tipo2 = $_POST['tipo2'];

	if(inserePokemon($conexao, $nome, $url, $descricao, $tipo1, $tipo2)) :
?>
		<p class="text-success">Pokémon <?= $nome; ?> adicionado com sucesso!</p>
<?php
	else :
    	$msg = mysqli_error($conexao);
?>
		<p class="text-danger">O pokémon <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
	endif
?>
	 
<?php include("rodape.php") ?>