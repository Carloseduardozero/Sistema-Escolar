<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo/estilo_index.css">
        <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8?>
        <title>Cadastro</title>
    </head>
    <body>
        <div>
            <h1>Cadastro</h1>
            <form action="../controller/controllerCadastro.php" method="POST">
                <input type="text" name="usuario" placeholder="Nome de Usuario" autofocus><br><br>
                <input type="password" name="senha" placeholder="Senha"><br><br>
                <input type="submit" value="Cadastrar"><br><br>
                <a href="../index.php">Voltar</a>
            </form>
            
        </div>
    </body>
</html>

