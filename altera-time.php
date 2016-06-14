<?php 

	include("cabecalho.php");         
	include("conecta.php");
	include("banco-produto.php");

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$poke1 = $_POST['pokemon1'];
	$poke2 = $_POST['pokemon2'];
	$poke3 = $_POST['pokemon3'];
	$poke4 = $_POST['pokemon4'];
	$poke5 = $_POST['pokemon5'];
	$poke6 = $_POST['pokemon6'];
	
	if(alteraTime($conexao, $id, $nome, $poke1, $poke2, $poke3, $poke4, $poke5, $poke6)) {
?>
    	<p class="text-success">O time <?= $nome ?> foi alterado.</p>
<?php 
	} else {
    	$msg = mysqli_error($conexao);
?>
    <p class="text-danger">O time <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
	}
?>

<?php include("rodape.php"); ?>
