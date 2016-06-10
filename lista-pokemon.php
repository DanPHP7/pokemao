<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");
    include("banco-tipo.php");

	verificaUsuario();

	$redirect = "index.php";
	if($_SESSION['tipo_usuario']=="0"){
		header("location:$redirect");
	}

?>

<?php
	if (array_key_exists("removido", $_POST) && $_POST['removido']==true) : 
?>

	<p class="alert-success">Produto apagado com sucesso.</p>

<?php 
	endif
?>


<?php
	$pokemons = listaPokemon($conexao);
    $categorias = listaCategorias($conexao);
    $listaCateg = array();
    $listaCateg[0] = "---";
    foreach ($categorias as $categoria):
    	$listaCateg[$categoria['Id']] = $categoria['Descricao'];
    endforeach
?>

<table class="table table-striped table-bordered">

<?php 
	foreach ($pokemons as $pokemon):
 ?>
 		<tr>
			<td><?= $pokemon['nome'] ?></td>
			<td><?= $pokemon['imagem'] ?></td>
			<td><?= substr($pokemon['descricao'], 0, 40) ?></td>
			<td><?php
					if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
					    echo $listaCateg[$pokemon['tipo1']];
					} else {
					    echo "Tipo deletado";
					}
				?>
			</td>
			<td><?php
					if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
					    echo $listaCateg[$pokemon['tipo2']];
					} else {
					    echo "Tipo deletado";
					}
				?>
			</td>
			<td>
				<form action="pokemon-altera-formulario.php" method="get">
				 	<input type="hidden" name="id" value="<?=$pokemon['id']?>" />
					<button class="btn btn-primary">alterar</button>
				</form>
			</td>
			<td>
				<form action="remove-pokemon.php" method="post">
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
