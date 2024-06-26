<?php
    $id2=$_POST['id'];
    
    $id= strstr($id2,'|', true);
    
    $descricao=$_POST['descricao'];
    $cor=$_POST['cor'];
    $tamanho=$_POST['tamanho'];
    
    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     if ((!empty($descricao)) or (!isset($descricao))) {
        $sql= "UPDATE `produto` SET `descricao`='$descricao' WHERE `codigo`= $id";
    } elseif ((!empty($cor)) or (!isset($cor)))        {
        $sql= "UPDATE `produto` SET `cor`='$cor' WHERE `codigo`= $id";
    } elseif ((!empty($tamanho)) or (!isset($tamanho))) {
        $sql= "UPDATE `produto` SET `tamanho`='$tamanho' WHERE `codigo`= $id";
    }
    $conexao->exec($sql);
    $conexao=null;

    echo "<h1> alteração feita com sucesso</h1>";
    echo "codigo (ID): $id";
    echo "Descricao (NOVO): $descricao";
    echo "Cor (NOVO): $cor";
    echo "Tamanho (NOVO): $tamanho";

    echo "<br><a href='INDEX.php'> voltar </a>";

    

?>