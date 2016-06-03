<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-produto.php");
    include("banco-tipo.php");

    $id = $_GET['id'];
    $pokemon = buscaPokemon($conexao, $id);
    $categorias = listaCategorias($conexao);
?>            
    <h1>Alterando pokémon</h1>
    <form action="altera-pokemon.php" method="post">
        <input type="hidden" name="id" value="<?=$pokemon['Id']?>" />
        <table class="table">
            <tr>
                <td>Nome</td>
                <td> <input class="form-control" type="text" name="nome" value="<?=$pokemon['Nome']?>"></td>
            </tr>
            <tr>
                <td>URL Imagem</td>
                <td><input  class="form-control" type="text" name="imagem" value="<?=$pokemon['Imagem']?>"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><input class="form-control" type="text" name="descricao" value="<?=$pokemon['Descricao']?>"></input></td>
            </tr>
            <tr>
                <td>Tipo 1</td>
                <td>
                    <select name="tipo1" class="form-control">
                            <option value="0">Selecione um tipo</option>
                        <?php foreach($categorias as $categoria) : ?>
                            <option value="<?=$categoria['Id']?>"
                                <?php 
                                if($pokemon['tipo1'] == $categoria['Id']) { echo "selected"; } ?> >
                                <?=$categoria['Descricao']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tipo 2 (opcional)</td>
                <td>
                    <select name="tipo2" class="form-control">
                            <option value="0">Selecione um tipo</option>
                        <?php foreach($categorias as $categoria) : ?>
                            <option value="<?=$categoria['Id']?>"
                                <?php 
                                if($pokemon['tipo2'] == $categoria['Id']) { echo "selected"; } ?> >
                                <?=$categoria['Descricao']?>
                            </option>
                        <?php endforeach ?>
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
