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

	function listaPokemons($conexao) {
	    $categorias = array();
	    $query = "SELECT * FROM pokemon";
	    $resultado = mysqli_query($conexao, $query);
	    while($categoria = mysqli_fetch_assoc($resultado)) {
	        array_push($categorias, $categoria);
	    }
	    return $categorias;
	}