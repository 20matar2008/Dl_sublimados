<?php
    $id2=$_POST['id'];
    
    $id= strstr($id2,'|', true);
    
    $tel=$_POST['tel'];
    
    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql= "UPDATE `cliente` SET `telefone`='$tel' WHERE `codigo`= $id";
    $conexao->exec($sql);
    $conexao=null;

    echo "<h1> alteração feita com sucesso</h1>";
    echo "codigo (ID): $id";
    echo "Telefone (NOVO): $tel";

    echo "<br><a href='INDEX.php'> voltar </a>";

    

?>