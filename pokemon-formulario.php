<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-tipo.php");

	verificaUsuario();

	$categorias = listaCategorias($conexao);

?>

<h1>Adicionar Pokémon</h1>
<form action="adiciona-pokemon.php" method="POST" name="fpokemon" onsubmit="return validarPokemon()">
	<table class="table table-responsive">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>URL da imagem</td>
			<td><input class="form-control" type="text" name="imagem"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><input class="form-control" type="text" name="descricao"></td>
		</tr>
		<tr>
			<td>Tipo 1</td>
    		<td>
    			<select name="tipo1" class="form-control">
    					<option value="0">Selecione um tipo</option>
	        		<?php foreach($categorias as $categoria) : ?>
	        			<option value="<?=$categoria['Id']?>">
	        				<?=$categoria['Descricao']?>
	        			</option>
	        		<?php endforeach ?>
        		</select>
    		</td>
		</tr>
		<tr>
			<td>Tipo 2 (opcional)</td>
    		<td>
    			<select name="tipo2" class="form-control">
    					<option value="0">Selecione um tipo</option>
	        		<?php foreach($categorias as $categoria) : ?>
	        			<option value="<?=$categoria['Id']?>">
	        				<?=$categoria['Descricao']?>
	        			</option>
	        		<?php endforeach ?>
        		</select>
    		</td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
