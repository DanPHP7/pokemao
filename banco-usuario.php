<?php

	function buscaUsuario($conexao, $UserName, $senha){
		$senhaMd5 = md5($senha);
		$query = "select * from usuario where UserName='{$UserName}' and Senha= '{$senhaMd5}'";
		$resultado = mysqli_query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado); // mysqli_fetch_assoc tras o primeiro
		return $usuario;
	}

	function listaUsuarios ($conexao){
		$usuarios = array();
		$resultado = mysqli_query($conexao, "SELECT UserID, UserName, Senha, Administrador FROM usuario");
		while($usuario = mysqli_fetch_assoc($resultado)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function insereUsuario($conexao, $UserName, $Senha, $Administrador) {
		$query = "INSERT INTO usuario (UserName, Senha, Administrador) VALUES ('{$UserName}', '{$Senha}', '{$Administrador}')";
	    $resultadoDaInsercao = mysqli_query($conexao, $query);

	    return $resultadoDaInsercao;
	}

		function removeUsuario($conexao, $UserID) {
		$query = "DELETE FROM usuario WHERE UserID = {$UserID}";
		return mysqli_query($conexao, $query);
	}