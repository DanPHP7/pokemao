
function validarLogin(){
	if(document.flogin.UserName.value == ""){
		alert("Campo usuário não pode ser vazio.");
		document.flogin.UserName.focus();
		return false;
	}

	if(document.flogin.senha.value == ""){
		alert("Campo senha não pode ser vazio.");
		document.flogin.senha.focus();
		return false;
	}
}

function validarTipo(){
	if(document.ftipo.nome.value == ""){
		alert("Campo nome não pode ser vazio.");
		document.ftipo.nome.focus();
		return false;
	}

	if(document.ftipo.cor.value == ""){
		alert("Campo cor do tipo de pokémon não pode ser vazio.");
		document.ftipo.cor.focus();
		return false;
	}
}

function validarPokemon(){
	if(document.fpokemon.nome.value == ""){
		alert("Campo nome não pode ser vazio.");
		document.fpokemon.nome.focus();
		return false;
	}

	if(document.fpokemon.imagem.value == ""){
		alert("Campo imagem não pode ser vazio.");
		document.fpokemon.imagem.focus();
		return false;
	}

	if(document.fpokemon.descricao.value == ""){
		alert("Campo descricao não pode ser vazio.");
		document.fpokemon.descricao.focus();
		return false;
	}

	if(document.fpokemon.tipo1.value == ""){// Para funcionar deve-se tirar o value 0 do tipo1
		alert("Campo tipo1 não pode ser vazio.");
		document.fpokemon.tipo1.focus();
		return false;
	}

	if(document.fpokemon.tipo2.value == ""){
		alert("Campo tipo2 não pode ser vazio.");
		document.fpokemon.tipo2.focus();
		return false;
	}
}

function validarUsuario(){
	if(document.fusuario.UserName.value == ""){
		alert("Campo usuário não pode ser vazio.");
		document.fusuario.UserName.focus();
		return false;
	}

	if(document.fusuario.Senha.value == ""){
		alert("Campo senha não pode ser vazio.");
		document.fusuario.Senha.focus();
		return false;
	}

	if(document.fusuario.Administrador.value == ""){
		alert("Campo Administrador não pode ser vazio.");
		document.fusuario.Administrador.focus();
		return false;
	}
}

function validarTime(){
	if(document.ftime.nome.value == ""){
		alert("Campo nome do time não pode ser vazio.");
		document.ftime.nome.focus();
		return false;
	}
}

function validarAlteraPokemon(){
	if(document.falteraPokemon.nome.value == ""){
		alert("Campo nome não pode ser vazio.");
		document.falteraPokemon.nome.focus();
		return false;
	}

	if(document.falteraPokemon.imagem.value == ""){
		alert("Campo imagem não pode ser vazio.");
		document.falteraPokemon.imagem.focus();
		return false;
	}

	if(document.falteraPokemon.descricao.value == ""){
		alert("Campo descricao não pode ser vazio.");
		document.falteraPokemon.descricao.focus();
		return false;
	}

	if(document.falteraPokemon.tipo1.value == ""){// Para funcionar deve-se tirar o value 0 do tipo1
		alert("Campo tipo1 não pode ser vazio.");
		document.falteraPokemon.tipo1.focus();
		return false;
	}

	if(document.falteraPokemon.tipo2.value == ""){
		alert("Campo tipo2 não pode ser vazio.");
		document.falteraPokemon.tipo2.focus();
		return false;
	}
}

function validarAlterarTipo(){
	if(document.falterarTipo.nome.value == ""){
		alert("Campo nome não pode ser vazio.");
		document.falterarTipo.nome.focus();
		return false;
	}

	if(document.falterarTipo.descricao.value == ""){
		alert("Campo cor do tipo de pokémon não pode ser vazio.");
		document.falterarTipo.descricao.focus();
		return false;
	}
}

function validarAlteraUsuario(){
	if(document.falteraUsuario.UserName.value == ""){
		alert("Campo usuário não pode ser vazio.");
		document.falteraUsuario.UserName.focus();
		return false;
	}

	if(document.falteraUsuario.Senha.value == ""){
		alert("Campo senha não pode ser vazio.");
		document.falteraUsuario.Senha.focus();
		return false;
	}

	if(document.falteraUsuario.Administrador.value == ""){
		alert("Campo Administrador não pode ser vazio.");
		document.falteraUsuario.Administrador.focus();
		return false;
	}
}
