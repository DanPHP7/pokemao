<?php  
	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-produto.php");

	verificaUsuario();
?>

<h1>Meus times</h1>
<h3>Time Principal</h3>

<img src="imagens/time_principal.png">

<h1>Times compartilhados comigo</h1>
<h3>Time do meu amigo</h3>
<img src="imagens/time_do_amigo.png">


<?php include("rodape.php") ?>
