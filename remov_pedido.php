<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DL sublimados</title>
</head>
<body>
    <h1> Excluir Pedido</h1>
    <form action="confirm_del_pedido.php" method="post">
        <p> codigo do Pedido (ID):
            <select name="id">
<?php
    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= " SELECT codigo, nome_cliente, codigo_produto FROM pedido ";
    $resultado = $conexao->query($sql);
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)){
        echo "<option> $linha->codigo | $linha->nome_cliente | $linha->codigo_produto </option>";
    }
$conexao=null;
?>
            </select>
        <br>
        <input type="reset" value="Cancelar">
        <input type="submit" value="Excluir">
        <br>
        <a href='INDEX.PHP'> voltar </a>    
    </form>
</body>
</html>
