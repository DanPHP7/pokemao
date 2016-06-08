<?php

	function buscaUsuario($conexao, $UserName, $senha){
		$senhaMd5 = md5($senha);
		$query = "select * from usuario where UserName='{$UserName}' and Senha= '{$senhaMd5}'";
		$resultado = mysqli_query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado); // mysqli_fetch_assoc tras o primeiro
		return $usuario;
	}

	function temUsuario($conexao, $UserName){
		$query = "select * from usuario where UserName='{$UserName}'";
		$resultado = mysqli_query($conexao, $query);
		$numero = mysqli_num_rows($resultado);
		if($numero==0){
			return false;
		} else {
			return true;
		}
	}

	function exibeUsuario($conexao, $UserID){
		$query = "select * from usuario where UserID='{$UserID}'";
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

	function alteraUsuario($conexao, $UserID, $UserName, $Senha, $Administrador) {
	    $query = "UPDATE usuario SET UserName = '{$UserName}', Senha = '{$Senha}', Administrador = '{$Administrador}' WHERE UserID = '{$UserID}'";
	    return mysqli_query($conexao, $query);
	}
	