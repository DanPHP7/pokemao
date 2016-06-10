<?php 

	include("cabecalho.php");         
	include("conecta.php");            
	include("banco-usuario.php"); 

	$UserID = $_POST['UserID'];
	$UserName = $_POST['UserName'];
	$Senha = md5($_POST['Senha']);
	
	if($_SESSION['usuario_logado'] == $UserName){
		$podeMudar = "sim";
	} elseif(!temUsuario($conexao, $UserName)) {
		$podeMudar = "sim"; 
	} else {
		$podeMudar = "nao";
	?><p class="text-danger">Este nome de usuário já está em uso</p><?php
	}




	if($podeMudar=="sim"){
		if(alteraUsuario($conexao, $UserID, $UserName, $Senha)) {
		?>
		    <p class="text-success">O usuário <?= $UserName ?> foi alterado.</p>
		<?php
			$_SESSION['usuario_logado'] = $UserName;
		} else {
		    $msg = mysqli_error($conexao);
		?>
		    <p class="text-danger">O usuário <?= $UserName ?> não foi alterado: <?= $msg?></p>
		<?php
		}
	}

include("rodape.php"); ?>
