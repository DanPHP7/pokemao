<?php 
	include("conecta.php");
	
	function validaCompartilhamento($time, $usuario){
		$resultado = mysqli_query($conexao, "Select UserId, TimeId from timecompartilhado where UserId = {$usuario} and TimeId = {$time}");
		if(!$resultado) return false;
		if($resultado->num_rows > 0) return true;
		return false;
	}

	function compartilhar($time, $usuario){
		if(validaCompartilhamento($time, $usuario)){
			echo "Time já possui esse compartilhamento para esse usuário.";
			exit;
		}
		if($time && $usuario){
			$query = mysqli_query($conexao, "INSERT INTO timecompartilhado(UserId, TimeId) VALUES ({$usuario}, {$time})");
			if($query){
				echo "Compartilhado com sucesso";
				exit;
			}
		}
	}

	function removeCompartilhamento($time, $usuario){
		if (validaCompartilhamento($time, $usuario)) {
			$query = mysqli_query($conexao, "DELETE FROM timecompartilhado where UserId = {$usuario} and TimeId = {$time}");
			if($query){
				echo "Não está mais compartilhando este time";
				exit;
			}
		}
		echo "Ocorreu um erro inesperado.";
		exit;
	}
	