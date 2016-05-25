<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-tipo.php");
	include("logica-usuario.php");

	verificaUsuario();

	$categorias = listaCategorias($conexao);

?>

<h1>Formulário de Cadastro</h1>
<form action="adiciona-pokemon.php" method="POST">
	<table class="table table-responsive">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Pokémon 01</td>
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
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>