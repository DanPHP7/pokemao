<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-produto.php");
    include("banco-usuario.php");

    $UserID = $_POST['UserID'];
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
                <td><input class="form-control" type="text" name="Senha" value=""></td>
            </tr>
            <tr>
                <td>Administrador?</td>
                <td>
                    <select name="Administrador" class="form-control">
                        <option value="0">Usuário</option>
                        <option value="1">Administrador</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
