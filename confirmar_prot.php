<?php
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $cor=$_POST['cor'];
    $tamanho=$_POST['tamanho'];

    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= "INSERT INTO produto (nome, descricao, cor, tamanho) VALUES ('$nome','$descricao','$cor','$tamanho')";
    $conexao->exec($sql);
    $conexao=null;

    echo "<h1> envio de dados feito com sucesso</h1>";
    echo "Nome: $nome";
    echo "<br> descricao:  $descricao";
    echo "<br> cor  $cor";
    echo "<br> tamanho  $tamanho";

    echo "<br><a href='INDEX.PHP'> voltar </a>";

    

?>