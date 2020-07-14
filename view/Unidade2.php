<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_index.css">
        <meta http-equiv=�Content-Type� content=�text/html; charset=utf-8?>
        <title>Cadastro de notas dos da segunda unidade</title>
    </head>
   <body>
    <div class="container">  
  <form id="contact" action="../controller/controllerUnidade2.php" method="post">
    <h3>Cadastro de notas dos alunos da segunda unidade</h3>
    
    
    <fieldset>
      <input placeholder="Insira seu nome" name="nome" type="text" tabindex="1" required>
    </fieldset> 
    <fieldset>
      <input placeholder="Insira sua serie"  name="serie" type="number" tabindex="2" max="9" min="1" required>
    </fieldset>
    <fieldset>
      <input placeholder="Insira sua nota"  name="nota" type="number" tabindex="3" max="10"  min="1" required>
    </fieldset>
    
    <fieldset>
    <select type="text" name="materia" placeholder=" Escolha a Matéria"  tabindex="5" required><br><br>
                        <option value=" " >Escolha uma das matérias</option>
                        <option>Matemática</option>
                        <option>Portugues</option>
                        <option >História</option>
                        <option >Geografia</option>
                        <option >Sociologia</option>
                        <option >Filosofia</option>
                        <option >Ingles</option>
    </select>         

    </fieldset>
    <fieldset>
      <button value="cadastrar" type="submit" id="contact-submit">Cadastrar</button>
    </fieldset>
   
    <fieldset>
    <a href="./inicial.php">Voltar</a>
    </fieldset>
  </form>
    </div>
  
    </body>
    </html>