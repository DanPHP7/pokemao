<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");

	verificaUsuario();

?>

<?php
	if (array_key_exists("removido", $_POST) && $_POST['removido']==true) : 
?>

	<p class="alert-success">Produto apagado com sucesso.</p>

<?php 
	endif
?>


<?php
	$pokemons = listaPokemons($conexao);
?>

<table class="table table-striped table-bordered">

<?php 
	foreach ($pokemons as $pokemon):
 ?>
 		<tr>
			<td><?= $pokemon['nome'] ?></td>
			<td><?= $pokemon['imagem'] ?></td>
			<td><?= substr($pokemon['descricao'], 0, 40) ?></td>
			<td><?= $pokemon['tipo1'] ?></td>
			<td><?= $pokemon['tipo2'] ?></td>
			<td><a class="btn btn-primary" href="produto-altera-formulario">alterar</a>
			<td>
				<form action="remove-produto.php" method="post">
				 	<input type="hidden" name="id" value="<?=$pokemon['id']?>" />
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
<?php 
	endforeach
 ?>

</table>

<?php include("rodape.php"); ?>
