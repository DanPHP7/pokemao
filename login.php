<?php 

include("conecta.php");
include ("banco-usuario.php");
include ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["UserName"], $_POST["senha"]);
//var_dump($usuario); //var_dump mostra a variavel na tela

if ($usuario == null) {
	header("Location: index.php?login=0"); // deve-se colocar 0 ou string vazia para o php entender que é false
} else {
	logaUsuario($usuario["UserName"],$usuario["Administrador"],$usuario["UserID"]);
	header("Location: index.php?login=1");
}
die();
