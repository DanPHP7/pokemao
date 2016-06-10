<html>
<head>
    <?php include('logica-usuario.php');?>
    <title>Sistema de compartilhamento Pokémon</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="imagens/favicon-pokeball.ico" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<script src="js/valida-formularios.js" type="text/javascript"></script>

<body>

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            	<a href="index.php" class="navbar-brand">Sistema para compartilhamento de times de Pokémons</a>
            </div>
        </div>
        <?php if(usuarioEstaLogado()){ ?>
        <div>
            <ul class="nav navbar-nav">
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="tipo-formulario.php">Adicionar Tipo</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="pokemon-formulario.php">Adicionar Pokémon</a></li><?php } ?>
                <li><a href="usuario-formulario.php">Adicionar Usuario</a></li>
                <li><a href="time-formulario.php">Criar Time</a></li>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="lista-pokemon.php">Pokémons</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="lista-tipo.php">Tipos</a></li><?php } ?>
                <?php if($_SESSION['tipo_usuario']==1){ ?><li><a href="lista-usuario.php">Usuarios</a></li><?php } ?>
                <li><a href="form_compartilhar_e_compartilhados.php">Times</a></li>
                <li><a href="usuario-altera-formulario.php">Minha conta</a></li>
            </ul>
        </div>
        <div>
            <div class='col-md-02 col-md-offset-10'>
                <ul class='nav navbar-nav'>
                    <li><a href='logout.php'>Logout</a></li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="container">
    <div class="principal">
    