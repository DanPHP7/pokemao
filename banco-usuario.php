<?php

function buscaUsuario($conexao, $UserName, $senha){
	$senhaMd5 = md5($senha);
	$query = "select * from usuario where UserName='{$UserName}' and Senha= '{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado); // mysqli_fetch_assoc tras o primeiro
	return $usuario;
}


