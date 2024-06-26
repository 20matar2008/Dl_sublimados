<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DL sublimados</title>
    <link href ="estilo.css" rel="stylesheet">
</head>
<body>
    <div id="logo">
        <img src="logo3.png">
        <ul>
            <li> cliente</li>
            <li> pruduto</li>
            <li> pedido</li>
     </div>
    <div id="menu">
        <div id="cliente">
            <h1> cliente</h1>
            <form action="client.php" method="post">
                <input type="submit" value="cadastrar">
            </form>
            <form action="remov_cliente.php" method="post">
                <input type="submit" value="excluir">
            </form>
            <form action="cliente_alt.php" method="post">
                <input type="submit" value="alterar">
            </form>
            <form action="client_consultar.php" method="post">
                <input type="submit" value="consultar">
            </form>
        </div>
    </div>
    <div id="container">
    <div id="cliente">
        <h1> Excluir Cliente</h1>
    <form action="confirm_del.php" method="post">
        <p> codigo do cliente (ID):
            <select name="id">
<?php
    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= " SELECT codigo, nome, telefone FROM cliente ";
    $resultado = $conexao->query($sql);
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)){
        echo "<option> $linha->codigo | $linha->nome | $linha->telefone </option>";
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
    <div id="rodape">
        <p> 
        desenvolvido por @daviguimaraessoutoferreira
        <br> <br>
        CONTATO: +55 21 99959-4396    
        </p>
    </div>


</body>
</html>