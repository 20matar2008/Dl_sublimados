<?php
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];

    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= "INSERT INTO cliente (nome, telefone, endereco) VALUES ('$nome','$telefone','$endereco')";
    $conexao->exec($sql);
    $conexao=null;

    echo "<h1> envio de dados feito com sucesso</h1>";
    echo "Nome: $nome";
    echo "<br> telefone:  $telefone";
    echo "<br> endereco  $endereco";

    echo "<br><a href='INDEX.PHP'> voltar </a>";

    

?>