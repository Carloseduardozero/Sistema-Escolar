

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo/estilo_index.css">
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Tela de Acesso</title>
    </head>
    <body>
        <div>
            <h1>Tela de Acesso</h1>
            <form action="controller/controllerAcesso.php" method="POST">
                <input type="text" name="usuario" placeholder="Nome de Usuario" autofocus><br><br>
                <input type="password" name="senha" placeholder="Senha"><br><br>
                <input type="submit" value="Acessar"><br><br>
                <a href="./view/Cadastrar.php">Ja e cadastrado?<strong>Cadastre-se!</strong></a>
            </form>
            
        </div>
    </body>
</html>
