<?php  
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	verificaUsuario();

	$times = listaMeusTimes($conexao,$_SESSION['id_user']);
	$outrosTimes = listaOutrosTimes($conexao,$_SESSION['id_user']);
	$todosTimes = listaTimes($conexao,$_SESSION['id_user']);

    $pokemons = listaPokemon($conexao);
    $listaPoke = array();
    $listaPoke[0] = "---";
    foreach ($pokemons as $pokemon):
    	$listaPoke[$pokemon['id']] = $pokemon['imagem'];
    endforeach;

    $listaTimes = array();
    $listaTimes[0] = "---";
    foreach ($todosTimes as $umTime):
    	$listaTimes[$umTime['Id']] = str_replace(" ","&nbsp;",$umTime['Nome']) . " " . $umTime['poke1'] . " " . $umTime['poke2'] . " " . $umTime['poke3'] . " " . $umTime['poke4'] . " " . $umTime['poke5'] . " " . $umTime['poke6'];
    endforeach;

?>


<h1 style="margin-bottom:50px">Meus times</h1>

<?php
foreach ($times as $time):
?>
<div style="border:1px solid #ccc; padding: 30px 30px 0; border-radius: 6px; position:relative;width:510px;display: inline-block;margin:0 10px 20px;">
	<h3><?=$time['Nome']?>
	<form action="time-altera-formulario.php" method="get" style="display:inline-block; position:absolute; right:0;bottom:68px;"><input type="hidden" name="id" value="<?=$time['Id']?>"><input type="submit" value="editar" class="btn btn-primary" style="border-radius:4px 0 0 4px"></form>
	 <form action="remove-time.php" method="post" style="display:inline-block; position:absolute; right:0;bottom:34px;"><input type="hidden" name="id" value="<?=$time['Id']?>"><input type="submit" value="remover" class="btn btn-danger" style="border-radius:4px 0 0 4px"></form>
	 <form action="compartilhar.php" method="post" style="display:inline-block; position:absolute; right:0;bottom:0;"><input type="hidden" name="id" value="<?=$time['Id']?>"><input type="submit" value="compartilhar" class="btn btn-info" style="border-radius:4px 0 4px 4px"></form></h3>
	<table style="margin: 0 auto 20px">
		<tr>
			<td><img src="<?=$listaPoke[$time['poke1']]?>"></td>
			<td><img src="<?=$listaPoke[$time['poke2']]?>"></td>
			<td><img src="<?=$listaPoke[$time['poke3']]?>"></td>
		</tr>
		<tr>
			<td><img src="<?=$listaPoke[$time['poke4']]?>"></td>
			<td><img src="<?=$listaPoke[$time['poke5']]?>"></td>
			<td><img src="<?=$listaPoke[$time['poke6']]?>"></td>
		</tr>
	</table>
</div>
<?php
endforeach;
?>

<h1>Times compartilhados comigo</h1>

<?php
foreach ($outrosTimes as $outroTime):
?>
<div style="border:1px solid #ccc; padding: 30px 30px 0; border-radius: 6px; position:relative;width:510px;display: inline-block;margin:0 10px 20px;">
	<h4><?php 
	$nome = Explode(" ",$listaTimes[$outroTime['IdTime']]);
	echo $nome[0]?></h4>
	<table style="margin: 0 auto 20px">
		<tr>
			<td><img src="<?=$listaPoke[$nome[1]]?>"></td>
			<td><img src="<?=$listaPoke[$nome[2]]?>"></td>
			<td><img src="<?=$listaPoke[$nome[3]]?>"></td>
		</tr>
		<tr>
			<td><img src="<?=$listaPoke[$nome[4]]?>"></td>
			<td><img src="<?=$listaPoke[$nome[5]]?>"></td>
			<td><img src="<?=$listaPoke[$nome[6]]?>"></td>
		</tr>
	</table>
</div>
<?php
endforeach;
?>


<?php include("rodape.php") ?>
