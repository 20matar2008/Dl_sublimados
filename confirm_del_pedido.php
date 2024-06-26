<?php
    $id2=$_POST['id'];

    $id= strstr($id2,'|', true);

    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= "DELETE FROM pedido WHERE codigo= $id";
    $conexao->exec($sql);
    $conexao=null;

    echo "<h1> exclusao feita com sucesso</h1>";
    echo "codigo (ID): $id";

    echo "<br><a href='INDEX.php'> voltar </a>";

    

?>