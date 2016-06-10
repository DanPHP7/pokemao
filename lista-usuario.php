<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-usuario.php");

	verificaUsuario();

	$redirect = "index.php";
	if($_SESSION['tipo_usuario']=="0"){
		header("location:$redirect");
	}

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
			<td>
				<?php  
					if ($usuario['Administrador'] == "0"){
						echo "Usuário";
					}else{
						echo "Administrador";
					}
				?>
			</td>


			<td>
				<form action="administrador-altera-formulario.php" method="post">
				 	<input type="hidden" name="UserID" value="<?=$usuario['UserID']?>" />
					<button class="btn btn-primary">alterar</button>
				</form>
			</td>	
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
