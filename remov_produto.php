<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DL sublimados</title>
</head>
<body>
    <h1> Excluir Produto</h1>
    <form action="confirm_del_prot.php" method="post">
        <p> codigo do produto (ID):
            <select name="id">
<?php
    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= " SELECT codigo, nome FROM produto ";
    $resultado = $conexao->query($sql);
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)){
        echo "<option> $linha->codigo | $linha->nome </option>";
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
