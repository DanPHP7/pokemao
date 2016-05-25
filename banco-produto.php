<?php

	function insereTipo($conexao, $nome, $cor) {
		$query = "INSERT INTO tipo (Descricao, Cor) VALUES ('{$nome}', '{$cor}')";
	    $resultadoDaInsercao = mysqli_query($conexao, $query);

	    return $resultadoDaInsercao;
	}

	function insereTime($conexao, $usuario, $nome, $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6) {
		$query = "INSERT INTO team (UserId, Nome, poke1, poke2, poke3, poke4, poke5, poke6, CreateAt) VALUES ('{$usuario}', '{$nome}', '{$pokemon1}', '{$pokemon2}', '{$pokemon3}', '{$pokemon4}', '{$pokemon5}', '{$pokemon6}', CURDATE())";
	    $resultadoDaInsercao = mysqli_query($conexao, $query);

	    return $resultadoDaInsercao;
	}

	function inserePokemon($conexao, $nome, $url, $descricao, $tipo1, $tipo2) {
		if($tipo2 == ""){
			$query = "INSERT INTO pokemon (Nome, Imagem, Descricao, tipo1) VALUES ('{$nome}', '{$url}', '{$descricao}', {$tipo1})";
		} else {
			$query = "INSERT INTO pokemon (Nome, Imagem, Descricao, tipo1, tipo2) VALUES ('{$nome}', '{$url}', '{$descricao}', {$tipo1}, {$tipo2})";
		}
	    $resultadoDaInsercao = mysqli_query($conexao, $query);

	    return $resultadoDaInsercao;
	}

	function listaProdutos ($conexao){
		$produtos = array();
		$resultado = mysqli_query($conexao, "SELECT p.*, c.nome as categoria_nome FROM produtos as p JOIN categorias as c on p.categoria_id = c.id");

		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($produtos, $produto);
		}

		return $produtos;
	}

	function removeProduto($conexao, $id) {
		$query = "DELETE FROM produtos WHERE id = {$id}";
		return mysqli_query($conexao, $query);
	}

	function buscaProduto($conexao, $id) {
	    $query = "select * from produtos where id = {$id}";
	    $resultado = mysqli_query($conexao, $query);
	    return mysqli_fetch_assoc($resultado);
	}

	function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
	    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
	        categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
	    return mysqli_query($conexao, $query);
	}