<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");


	verificaUsuario();

	$nome = $_POST['nome'];
	$cor = $_POST['cor'];

	if(insereTipo($conexao, $nome, $cor)) :
?>
		<p class="text-success">Tipo <?= $nome; ?>, <?= $cor; ?> adicionado com sucesso!</p>
<?php
	else :
    	$msg = mysqli_error($conexao);
?>
		<p class="text-danger">O tipo <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
	endif
?>
	 
<?php include("rodape.php") ?>
