<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-tipo.php");

	verificaUsuario();
	
	$time = $_POST['id'];

?>

<h1>Compartilhar Time <span style="font-size:0.6em; color:#bbb">(meu código: <?=$_SESSION['id_user']?>)</span></h1>
<form action="compartilhar-time.php" method="POST" name="fpokemon" onsubmit="return validarPokemon()">
	<input type="hidden" name="time" value="<?=$time?>">
	<table class="table table-responsive">
		<tr>
			<td>Codigo do amigo</td>
			<td><input class="form-control" type="text" name="amigo" pattern="[0-9]+$"></td>
		</tr>
		<tr>
			<td colspan="2"><input class="btn btn-primary" type="submit" value="Compartilhar!"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
