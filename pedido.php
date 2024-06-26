<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DL sublimados</title>
</head>
<body>
    <h1>Cadastro de pedidos</h1>
    <form action="confirmar_pedido.php" method="post">
        <p>codigo do cliente: <input type="text" name="codigo_cliente"></p>
        <p>nome do cliente: <input type="text" name="nome_cliente"></p>
        <p>codigo do produto: <input type="text" name="codigo_produto"></p>
        <p>quantidade: <input type="text" name="quantidade"></p>
        <p>observacao: <input type="text" name="observacao"></p>
        <input type="reset" value="limpar">
        <input type="submit" value="cadastrar">
        <br>
        <a href='INDEX.PHP'> voltar </a>    
    </form>
</body>
</html>