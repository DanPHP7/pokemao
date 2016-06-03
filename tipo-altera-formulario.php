<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-produto.php");
    include("banco-tipo.php");

    $id = $_POST['id'];
    $tipo = buscaTipo($conexao, $id);
?>            
    <h1>Alterando tipo</h1>
    <form action="altera-tipo.php" method="post" name="falterarTipo" onsubmit="return validarAlterarTipo()">
        <input type="hidden" name="id" value="<?=$tipo['Id']?>" />
        <table class="table">
            <tr>
                <td>Nome</td>
                <td> <input class="form-control" type="text" name="nome" value="<?=$tipo['Descricao']?>"></td>
            </tr>
            <tr>
                <td>Cor do tipo de pokémon</td>
                <td><input class="form-control" type="text" name="descricao" value="<?=$tipo['Cor']?>"></input></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
