<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-produto.php");
    include("banco-usuario.php");

    $UserID = $_SESSION['id_user'];
    $usuario = exibeUsuario($conexao, $UserID);

?>            
    <h1>Alterando usuário</h1>
    <form action="altera-usuario.php" method="POST" 
    name="falteraUsuario" onsubmit="return validarAlteraUsuario()">
        <input type="hidden" name="UserID" value="<?=$usuario['UserID']?>" />
        <table class="table">
            <tr>
                <td>Nome</td>
                <td> <input class="form-control" type="text" name="UserName" value="<?=$usuario['UserName']?>"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="Senha" value=""></td>
            </tr>
            <tr>
                <td>Administrador?</td>
                <td><?php
                    if($usuario['Administrador']=="0"){
                        echo "Usuário";
                    } else {
                        echo "Administrador";
                    } ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
