<?php 

	function usuarioEstaLogado() {
		return isset($_COOKIE["usuario_logado"]);
	}

	function verificaUsuario() {
		if (!usuarioEstaLogado()) {
			header("Location: index.php?falhaDeSeguranca=true");
			die();
		}
	}

	function usuarioLogado() {
		return $_COOKIE["usuario_logado"];
	}

	function tipoUsuarioLogado() {
		return $_COOKIE["tipo_usuario"];
	}

	function idUsuarioLogado() {
		return $_COOKIE["id_user"];
	}

	function logaUsuario($UserName,$Admin,$UserID) {
		setcookie("usuario_logado", $UserName, time() + 6000); //fica logado por 60 segundos
		setcookie("tipo_usuario", $Admin, time() + 6000); //Ve se é administrador
		setcookie("id_user", $UserID, time() + 6000); //Ve se é administrador
	}