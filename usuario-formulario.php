<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-usuario.php");

	verificaUsuario();

	$usuarios = listaUsuarios($conexao);

?>

<h1>Adicionar Usuário</h1>

<div class="maisEspaco">
	<p>
		Criar Senha Criptografada: 
		<a href="http://md5encryption.com/" target="_blank">http://md5encryption.com/</a>
	</p>
</div>
<form action="adiciona-usuario.php" method="POST" name="fusuario" onsubmit="return validarUsuario()">
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
