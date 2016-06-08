<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-usuario.php");

	verificaUsuario();

?>

<?php
	if (array_key_exists("removido", $_POST) && $_POST['removido']==true) : 
?>

	<p class="alert-success">Usuario apagado com sucesso.</p>

<?php 
	endif
?>


<?php
	$usuarios = listaUsuarios($conexao);
?>

<table class="table table-striped table-bordered">

<?php 
	foreach ($usuarios as $usuario):
 ?>
 		<tr>
			<td><?= $usuario['UserName'] ?></td>
			<td><?= $usuario['Senha'] ?></td>
			<td><?= $usuario['Administrador'] ?></td>
			<td>
			<form action="usuario-altera-formulario.php" method="post">
			 	<input type="hidden" name="UserID" value="<?=$usuario['UserID']?>" />
				<button class="btn btn-primary">alterar</button>
			</form>	
			<td>
				<form action="remove-usuario.php" method="post">
				 	<input type="hidden" name="UserID" value="<?=$usuario['UserID']?>" />
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
<?php 
	endforeach
 ?>

</table>

<?php include("rodape.php"); ?>
