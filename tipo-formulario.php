<?php

	include("cabecalho.php");
	include("conecta.php");

	verificaUsuario();

	$redirect = "index.php";
	if($_SESSION['tipo_usuario']=="0"){
		header("location:$redirect");
	}

?>

<h1>Adicionar Tipo</h1>
<form action="adiciona-tipo.php" method="POST" name="ftipo" onsubmit="return validarTipo()">
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
			<td>
				<!--<button class="btn btn-primary">Cadastrar</button>-->
				<input class="btn btn-primary" type="submit" value="Cadastrar">
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
