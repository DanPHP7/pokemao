<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-usuario.php");

	verificaUsuario();

	$usuarios = listaUsuarios($conexao);

?>

<h1>Adicionar Usuário</h1>
<form action="adiciona-usuario.php" method="POST">
	<table class="table table-responsive">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="UserName"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="text" name="Senha"></td>
		</tr>
		<tr>
			<td>Administrador?</td>
			<td><input class="form-control" type="text" name="Administrador"></td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
