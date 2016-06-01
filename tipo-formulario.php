<?php  

	include("cabecalho.php");
	include("conecta.php");

	verificaUsuario();

?>

<h1>Adicionar Tipo</h1>
<form action="adiciona-produto.php" method="POST">
	<table class="table table-responsive">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Cor do tipo de pokémon</td>
			<td><input class="form-control" type="text" name="cor"></td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>