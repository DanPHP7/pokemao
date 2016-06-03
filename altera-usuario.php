<?php 

	include("cabecalho.php");         
	include("conecta.php");            
	include("banco-usuario.php"); 

	$UserID = $_POST['UserID'];
	$UserName = $_POST['UserName'];
	$Senha = $_POST['Senha'];
	$Administrador = $_POST['Administrador'];
	
	if(alteraUsuario($conexao, $UserID, $UserName, $Senha, $Administrador)) {
?>
    	<p class="text-success">O usuário <?= $UserName ?> foi alterado.</p>
<?php 
	} else {
    	$msg = mysqli_error($conexao);
?>
    <p class="text-danger">O usuário <?= $UserName ?> não foi alterado: <?= $msg?></p>
<?php
	}
?>

<?php include("rodape.php"); ?>
