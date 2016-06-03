<?php 

	include("cabecalho.php");         
	include("conecta.php");            
	include("banco-produto.php"); 

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$imagem = $_POST['imagem'];
	$descricao = $_POST['descricao'];
	$tipo1 = $_POST['tipo1'];
	$tipo2 = $_POST['tipo2'];
	
	if(alteraPokemon($conexao, $id, $nome, $imagem, $descricao, $tipo1, $tipo2)) {
?>
    	<p class="text-success">O pokémon <?= $nome ?>, <?= $imagem ?> foi alterado.</p>
<?php 
	} else {
    	$msg = mysqli_error($conexao);
?>
    <p class="text-danger">O pokémon <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
	}
?>

<?php include("rodape.php"); ?>
