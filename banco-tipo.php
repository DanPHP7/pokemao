<?php

	function listaCategorias($conexao) {
	    $categorias = array();
	    $query = "SELECT * FROM tipo";
	    $resultado = mysqli_query($conexao, $query);
	    while($categoria = mysqli_fetch_assoc($resultado)) {
	        array_push($categorias, $categoria);
	    }
	    return $categorias;
	}

	function buscaTime($conexao, $id) {
	    $query = "select * from team where Id = {$id}";
	    $resultado = mysqli_query($conexao, $query);
	    return mysqli_fetch_assoc($resultado);
	}

	function buscaTipo($conexao, $id) {
	    $query = "select * from tipo where Id = {$id}";
	    $resultado = mysqli_query($conexao, $query);
	    return mysqli_fetch_assoc($resultado);
	}


	function listaPokemons($conexao) {
	    $categorias = array();
	    $query = "SELECT * FROM pokemon";
	    $resultado = mysqli_query($conexao, $query);
	    while($categoria = mysqli_fetch_assoc($resultado)) {
	        array_push($categorias, $categoria);
	    }
	    return $categorias;
	}
	
	function alteraTipo($conexao, $id, $nome, $descricao) {
	    $query = "update tipo set Descricao = '{$nome}', Cor = '{$descricao}' where Id = '{$id}'";
	    return mysqli_query($conexao, $query);
	}