<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-tipo.php");

	verificaUsuario();
	
	$id = $_GET['id'];

	$pokemons = listaPokemons($conexao);
    $categorias = listaCategorias($conexao);
    $listaCateg = array();
    $listaCateg[0] = "Churros transparent";
    foreach ($categorias as $categoria):
    	$listaCateg[$categoria['Id']] = $categoria['Descricao'] . " #" . $categoria['Cor'];
    endforeach;
	
    $listaPoke = array();
    $listaPoke[0] = "Churros transparent";
    foreach ($pokemons as $pokemon):
    	$listaPoke[$pokemon['Id']] = $pokemon['Nome'] . " " . $pokemon['Imagem'] . " " . $pokemon['tipo1'] . " " . $pokemon['tipo2'] . " " . $pokemon['Id'];
    endforeach;
	
	$time = buscaTime($conexao, $id);

?>

<h1>Criar Time</h1>

<form action="altera-time.php" method="POST" name="ftime" onsubmit="return validarTime()">

	<input type="hidden" name="id" value="<?=$time['Id']?>" />
	
	<table class="table table-responsive">
		<tr>
			<td>Nome do Time</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$time['Nome']?>"></td>
		</tr>
	</table>

	<div class="select-container">
		<div class="select-option">
			<div class="select-label">Selecione um pokémão</div>
			<div class="select-arrow">&#9660;</div>
		</div>
		<div class="all-options hidden">
			<?php foreach($pokemons as $pokemon) : ?>
				<div class="single-option">
					<div class="imagem"><img src="<?=$pokemon['Imagem']?>"></div>
					<div class="dados">
						<div class="codigo"><?=$pokemon['Id']?></div>
						<div class="nome"><?=$pokemon['Nome']?></div>
						<div class="tipos">
							<?php
								if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
									$nome = Explode(" ",$listaCateg[$pokemon['tipo1']]);
									$primeiro_nome = $nome[0];
									$segundo_nome = $nome[1];
								    echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
								} else {
								    echo "Tipo deletado ";
								}

								if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
									$nome = Explode(" ",$listaCateg[$pokemon['tipo2']]);
									$primeiro_nome = $nome[0];
									$segundo_nome = $nome[1];
									if ($segundo_nome != "transparent") {
								    	echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
									}
								} else {
								    echo "Tipo deletado ";
								}
							?>
						</div>
					</div>
				</div>		
    		<?php endforeach ?>
		</div>
	</div>

	<div class="container-pokemons">
		<?php 
			$poke1 = Explode(" ",$listaPoke[$time['poke1']]);
			$poke2 = Explode(" ",$listaPoke[$time['poke2']]);
			$poke3 = Explode(" ",$listaPoke[$time['poke3']]);
			$poke4 = Explode(" ",$listaPoke[$time['poke4']]);
			$poke5 = Explode(" ",$listaPoke[$time['poke5']]);
			$poke6 = Explode(" ",$listaPoke[$time['poke6']]);
		?>
		<div class="single-pokemon">
			<div class="imagem">
				<img src="<?=$poke1[1]?>">
			</div>
			<div class="dados">
				<div class="nome">
					<?php 
						echo $poke1[0];
					?>
				</div>
				<div class="tipos">
					<?php
						if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke1[2]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
						} else {
							echo "Tipo deletado ";
						}

						if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke1[3]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							if ($segundo_nome != "transparent") {
								echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
							}
						} else {
							echo "Tipo deletado ";
						}
					?>
				</div>
			</div>
			<div class="remover"></div>
		</div>
		<div class="single-pokemon">
			<div class="imagem">
				<img src="<?=$poke2[1]?>">
			</div>
			<div class="dados">
				<div class="nome">
					<?php 
						echo $poke2[0];
					?>
				</div>
				<div class="tipos">
					<?php
						if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke2[2]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
						} else {
							echo "Tipo deletado ";
						}

						if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke2[3]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							if ($segundo_nome != "transparent") {
								echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
							}
						} else {
							echo "Tipo deletado ";
						}
					?>
				</div>
			</div>
			<div class="remover"></div>
		</div>
		<div class="single-pokemon">
			<div class="imagem">
				<img src="<?=$poke3[1]?>">
			</div>
			<div class="dados">
				<div class="nome">
					<?php 
						echo $poke3[0];
					?>
				</div>
				<div class="tipos">
					<?php
						if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke3[2]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
						} else {
							echo "Tipo deletado ";
						}

						if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke3[3]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							if ($segundo_nome != "transparent") {
								echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
							}
						} else {
							echo "Tipo deletado ";
						}
					?>
				</div>
			</div>
			<div class="remover"></div>
		</div>
		<div class="single-pokemon">
			<div class="imagem">
				<img src="<?=$poke4[1]?>">
			</div>
			<div class="dados">
				<div class="nome">
					<?php 
						echo $poke4[0];
					?>
				</div>
				<div class="tipos">
					<?php
						if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke4[2]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
						} else {
							echo "Tipo deletado ";
						}

						if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke4[3]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							if ($segundo_nome != "transparent") {
								echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
							}
						} else {
							echo "Tipo deletado ";
						}
					?>
				</div>
			</div>
			<div class="remover"></div>
		</div>
		<div class="single-pokemon">
			<div class="imagem">
				<img src="<?=$poke5[1]?>">
			</div>
			<div class="dados">
				<div class="nome">
					<?php 
						echo $poke5[0];
					?>
				</div>
				<div class="tipos">
					<?php
						if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke5[2]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
						} else {
							echo "Tipo deletado ";
						}

						if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke5[3]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							if ($segundo_nome != "transparent") {
								echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
							}
						} else {
							echo "Tipo deletado ";
						}
					?>
				</div>
			</div>
			<div class="remover"></div>
		</div>
		<div class="single-pokemon">
			<div class="imagem">
				<img src="<?=$poke6[1]?>">
			</div>
			<div class="dados">
				<div class="nome">
					<?php 
						echo $poke6[0];
					?>
				</div>
				<div class="tipos">
					<?php
						if (array_key_exists($pokemon['tipo1'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke6[2]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							echo '<span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
						} else {
							echo "Tipo deletado ";
						}

						if (array_key_exists($pokemon['tipo2'], $listaCateg)) {
							$nome = Explode(" ",$listaCateg[$poke6[3]]);
							$primeiro_nome = $nome[0];
							$segundo_nome = $nome[1];
							if ($segundo_nome != "transparent") {
								echo ' <span style="background:'.$segundo_nome.'">'.$primeiro_nome.'</span>';
							}
						} else {
							echo "Tipo deletado ";
						}
					?>
				</div>
			</div>
			<div class="remover"></div>
		</div>
	</div>

	<input type="hidden" name="pokemon1" value="<?=$poke1[4]?>">
	<input type="hidden" name="pokemon2" value="<?=$poke2[4]?>">
	<input type="hidden" name="pokemon3" value="<?=$poke3[4]?>">
	<input type="hidden" name="pokemon4" value="<?=$poke4[4]?>">
	<input type="hidden" name="pokemon5" value="<?=$poke5[4]?>">
	<input type="hidden" name="pokemon6" value="<?=$poke6[4]?>">

	<input class="btn btn-primary" type="submit" value="Alterar Time">
</form>


	<script src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var nPokemons = 6;
			$(".select-container").click(function(){
				$(this).find(".all-options").toggleClass("hidden");
			});
			$(".single-option").click(function(){
				if (nPokemons < 6) {
					nPokemons = nPokemons + 1;
					var img = $(this).find("img").attr('src');
					var nome = $(this).find(".nome").text();
					var tipos = $(this).find(".tipos").html();
					var codigo = $(this).find(".codigo").text();
					var texto = "<div class='single-pokemon'><div class='imagem'><img src='"+img+"'></div><div class='dados'><div class='nome'>"+nome+"</div><div class='tipos'>"+tipos+"</div></div><div class='remover'></div></div>";
					$(".container-pokemons").append(texto);
					$("input[name='pokemon"+nPokemons+"']").val(codigo);
				} else {
					alert("Você já selecionou 06 pokémons!");
				}
			});
			$(".container-pokemons").on('click','.remover',function(){
				var posicao = $(this).parent().index() + 1;
				$("input[name='pokemon"+posicao+"']").val("");
				for(var index = posicao; index < 6; index++){
					var indexa = index + 1;
					$("input[name='pokemon"+index+"']").val($("input[name='pokemon"+indexa+"']").val());
				}
				$("input[name='pokemon6']").val("");
				$(this).parent().remove();
				nPokemons = nPokemons - 1;
			});
		});
	</script>

<?php include("rodape.php") ?>
