<?php
    $codigo_cli=$_POST['codigo_cliente'];
    $nome_cli=$_POST['nome_cliente'];
    $codigo_prod=$_POST['codigo_produto'];
    $quantia=$_POST['quantidade'];
    $observacao=$_POST['observacao'];

    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= "INSERT INTO pedido (codigo_cliente, nome_cliente, codigo_produto, quantia, observacao) VALUES ('$codigo_cli','$nome_cli','$codigo_prod','$quantia','$observacao')";
    $conexao->exec($sql);
    $conexao=null;

    echo "<h1> envio de dados feito com sucesso</h1>";
    echo "codigo_cliente: $codigo_cli";
    echo "<br> nome_cliente:  $nome_cli";
    echo "<br> codigo_produto  $codigo_prod";
    echo "<br> quantia  $quantia";
    echo "<br> observacao  $observacao";

    echo "<br><a href='INDEX.PHP'> voltar </a>";

    

?>