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
    <h1>Cadastro de Clientes</h1>
    <form action="confirmar.php" method="post">
        <p>nome: <input type="text" name="nome"></p>
        <p>telefone: <input type="text" name="telefone"></p>
        <p>endereço: <input type="text" name="endereco"></p>
        <input type="reset" value="limpar">
        <input type="submit" value="cadastrar">
        <br>
        <a href='INDEX.PHP'> voltar </a>    
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
