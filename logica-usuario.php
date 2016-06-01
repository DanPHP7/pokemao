<?php 
	session_start();

	function usuarioEstaLogado() {
		return isset($_SESSION["usuario_logado"]);
	}
	function teste(){
		return isset($_SESSION["usuario_logado"]);
	}
	function verificaUsuario() {
		if (!usuarioEstaLogado()) {
			header("Location: index.php?falhaDeSeguranca=true");
			die();
		}
	}

	function usuarioLogado() {
		return $_SESSION["usuario_logado"];
	}

	function tipoUsuarioLogado() {
		return $_SESSION["tipo_usuario"];
	}

	function idUsuarioLogado() {
		return $_SESSION["id_user"];
	}

	function logaUsuario($UserName,$Admin,$UserID)
	{
		$_SESSION['usuario_logado'] = $UserName;
		$_SESSION['tipo_usuario'] = $Admin;
		$_SESSION['id_user'] = $UserID;
	}
	function logout(){
		session_destroy();
	}