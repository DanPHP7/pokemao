<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-usuario.php");

	$usuarios = listaUsuarios($conexao);

?>

<h1>Novo Usuário</h1>

<form action="adiciona-usuario.php" method="POST" name="fusuario" onsubmit="return validarUsuario()">
	<table class="table table-responsive">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="UserName"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="password" name="Senha"></td>
		</tr>
		<tr>
			<td colspan="2"><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
