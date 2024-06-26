<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grafica </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<?php
    echo "<table class='table' style='border: solid 1px black;'>";
    echo "<tr><th> codigo_cliente </th> <th> nome_cliente </th> <th> codigo_produto </th> <th> quantia </th> <th> observacao </th></tr>";
    $endBD="localhost";
    $user="root";
    $senha="";
    $nomeBD="dl_sublimados";
    $conexao = new PDO("mysql:host=$endBD;dbname=$nomeBD", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql= " SELECT codigo_cliente, nome_cliente, codigo_produto, quantia, observacao FROM pedido ";
    $resultado = $conexao->query($sql);
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)){
        echo "<tr><td> $linha->codigo_cliente </td> <td>$linha->nome_cliente </td> <td> $linha->codigo_produto </td> <td> $linha->quantia</td> <td> $linha->observacao</td></tr>";
    }
echo"</table>";
    $conexao=null;
    echo "<br><a href='INDEX.php'> voltar </a>";

    

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>