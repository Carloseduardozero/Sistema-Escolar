<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_index.css">
        <meta http-equiv=�Content-Type� content=�text/html; charset=utf-8?>
        <title>Cadastro</title>
    </head>
    <body>
    <div class="container">  
  <form id="contact" action="../controller/controllerCadastro.php" method="post">
    <h3>Cadastra-se </h3>
    <h4>Coloque suas credencias aqui</h4>
    
    <fieldset>
      <input placeholder="Insira seu nome" name="usuario" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Insira sua senha"  name="senha" type="password" tabindex="3" required>
    </fieldset>
    <fieldset>
      <button type="submit" id="contact-submit" >Cadastre</button>
    </fieldset>
    <fieldset>
    <a href="../index.php">Voltar</a>
    </fieldset>
  </form>
 
  
</div>
    </body>
</html>

