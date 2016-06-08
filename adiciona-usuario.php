<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-usuario.php");

	verificaUsuario();

	$UserName = $_POST['UserName'];
	$Senha = md5($_POST['Senha']);
	$Administrador = $_POST['Administrador'];
	if(!temUsuario($conexao, $UserName)){
			if(insereUsuario($conexao, $UserName, $Senha, $Administrador)) {
		?>
				<p class="text-success">Usuário <?= $UserName; ?> adicionado com sucesso!</p>
		<?php
			} else {
		    	$msg = mysqli_error($conexao);
		?>
				<p class="text-danger">O usuário <?= $UserName; ?> não foi adicionado: <?= $msg ?></p>
		<?php
			}
	} else {
		?>
		<p class="text-danger">Já existe um usuário com este nome</p>
<?php
	}
	include("rodape.php");
?>
