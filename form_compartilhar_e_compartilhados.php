<?php  
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	verificaUsuario();

	$times = listaMeusTimes($conexao,$_SESSION['id_user']);

    $pokemons = listaPokemon($conexao);
    $listaPoke = array();
    $listaPoke[0] = "---";
    foreach ($pokemons as $pokemon):
    	$listaPoke[$pokemon['id']] = $pokemon['imagem'];
    endforeach;

?>


<h1>Meus times</h1>

<?php
foreach ($times as $time):
?>
<h3><?=$time['Nome']?></h3>
<table style="margin: 0 auto 60px">
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
<?php
endforeach;
?>

<h1>Times compartilhados comigo</h1>
<h3>Time do meu amigo</h3>
<img src="imagens/time_do_amigo.png">


<?php include("rodape.php") ?>
