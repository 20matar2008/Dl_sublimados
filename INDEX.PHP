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
    
     </div>
    <div id="menu">
        <ul>
                <li> cliente</li>
                <li> pruduto</li>
                <li> pedido</li>
    </div>
    <div id="container">
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
        <h1> produto</h1>
        <form action="produto.php" method="post">
            <input type="submit" value="cadastrar">
        </form>
        <form action="remov_produto.php" method="post">
            <input type="submit" value="excluir">
        </form>
        <form action="produto_alt.php" method="post">
            <input type="submit" value="alterar">
        </form>
        <form action="produto_consultar.php" method="post">
            <input type="submit" value="consultar">
        </form>
        </div>
        <h1> pedido</h1>
        <form action="pedido.php" method="post">
            <input type="submit" value="cadastrar">
        </form>
        <form action="remov_pedido.php" method="post">
            <input type="submit" value="excluir">
        </form>
        <form action="pedido_consultar.php" method="post">
            <input type="submit" value="consultar">
        </form>
    </div>
    <div id="rodape">
        <p> 
        desenvolvido por @daviguimaraessoutoferreira
        <br> <br>
        CONTATO: +55 21 99959-4396    
        </p>
    </div>


</body>
</html>