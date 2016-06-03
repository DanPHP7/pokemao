<?php 

	include("cabecalho.php");         
	include("conecta.php");            
	include("banco-tipo.php"); 

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	
	if(alteraTipo($conexao, $id, $nome, $descricao)) {
?>
    	<p class="text-success">O tipo <?= $nome ?> foi alterado.</p>
<?php 
	} else {
    	$msg = mysqli_error($conexao);
?>
    <p class="text-danger">O tipo <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
	}
?>

<?php include("rodape.php"); ?>
