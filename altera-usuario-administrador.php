<?php 

	include("cabecalho.php");         
	include("conecta.php");            
	include("banco-usuario.php"); 

	$UserID = $_POST['UserID'];
	$Administrador = $_POST['Administrador'];
	
		if(alteraUsuarioAdministrador($conexao, $UserID, $Administrador)) {
		?>
		    	<p class="text-success">O tipo de usuário foi alterado.</p>
		<?php 
		} else {
		    	$msg = mysqli_error($conexao);
		?>
		    <p class="text-danger">O tipo de usuário não foi alterado: <?= $msg?></p>
		<?php
			}
		?>

<?php include("rodape.php"); ?>
