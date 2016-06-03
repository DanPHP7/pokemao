<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");

	verificaUsuario();

?>

<?php
	if (array_key_exists("removido", $_POST) && $_POST['removido']==true) : 
?>

	<p class="alert-success">Tipo apagado com sucesso.</p>

<?php 
	endif
?>


<?php
	$tipos = listaTipos($conexao);
?>

<table class="table table-striped table-bordered">

<?php 
	foreach ($tipos as $tipo):
 ?>
 		<tr>
			<td><?= $tipo['descricao'] ?></td>
			<td><?= $tipo['cor'] ?></td>
			<td>
				<form action="tipo-altera-formulario.php" method="post">
				 	<input type="hidden" name="id" value="<?=$tipo['id']?>" />
					<button class="btn btn-primary">alterar</button>
				</form>
			</td>
			<td>
				<form action="remove-tipo.php" method="post">
				 	<input type="hidden" name="id" value="<?=$tipo['id']?>" />
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
<?php 
	endforeach
 ?>

</table>

<?php include("rodape.php"); ?>
