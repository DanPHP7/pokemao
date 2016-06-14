<html>
<head>
    <?php include('logica-usuario.php');?>
    <title>PokeTeam - Sistema de compartilhamento Pokémon</title>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
	<link rel="manifest" href="icon/manifest.json">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>

<script src="js/valida-formularios.js" type="text/javascript"></script>

<body>

    <div class="navbar navbar-default navbar-fixed-top" style="height:70px">
        <div class='col-md-10 col-md-offset-1' style='padding-left:7px;'>
            <div class="navbar-header">
            	<a href="index.php" class="navbar-brand" style="margin-top:3px"><img src="icon.png">PokeTeam</a>
            </div>
        </div>
        <?php if(usuarioEstaLogado()){ ?>
        <div style="float:right; margin-top:-53px;margin-bottom:30px">
            <ul class="nav navbar-nav">
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="lista-tipo.php">Tipos</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="tipo-formulario.php">Adicionar Tipo</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="lista-pokemon.php">Pokémons</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="pokemon-formulario.php">Adicionar Pokémon</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="lista-usuario.php">Usuarios</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="usuario-formulario.php">Adicionar Usuario</a></li><?php } ?>
                <li><a href="form_compartilhar_e_compartilhados.php">Times</a></li>
                <li><a href="time-formulario.php">Criar Time</a></li>
                <li><a href="usuario-altera-formulario.php">Minha conta</a></li>
            </ul>
        </div>
        <div style="position:absolute;right:0;top:40px">
			<ul class='nav navbar-nav'>
				<li><a href='logout.php' style="padding:5px 10px">Logout</a></li>
			</ul>
        </div>
        <?php } ?>
    </div>

    <div class="container">
    <div class="principal">
    