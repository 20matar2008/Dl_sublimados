<!DOCTYPE html>
<html>
    <head>
        <title> Grafica Davi</title>
    </head>
    <body>
        <h1> Alterar Produto </h1>
    <form action="confirmar_alt_produto.php" method="post">
        <p> Código do Produto (ID): 
    <select name="id">
<?php

    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= " SELECT codigo, nome,descricao, cor, tamanho FROM produto ";
    $resultado = $conexao->query($sql);
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)){
        echo "<option> $linha->codigo |$linha->nome |$linha->descricao | $linha->cor | $linha->tamanho </option>";
    }
$conexao=null;
?>
            </select></p>
        <p> Novo descricao: <input type="text" name="descricao"></p>
        <input type="reset" value="Cancelar">
        <input type="submit" value="Alterar">
        <br>
        <p> Novo cor: <input type="text" name="cor"></p>
        <input type="reset" value="Cancelar">
        <input type="submit" value="Alterar">
        <br>
        <p> Novo tamanho: <input type="text" name="tamanho"></p>
        <input type="reset" value="Cancelar">
        <input type="submit" value="Alterar">
    </form>
    <a href='INDEX.php'> voltar </a>
</body>
</html>