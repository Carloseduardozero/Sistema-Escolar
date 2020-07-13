<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_index.css">
        <meta http-equiv=�Content-Type� content=�text/html; charset=utf-8?>
        <title>Cadastro de notas dos alunos</title>
    </head>
   <body>
    <div class="container">  
  <form id="contact" action="../controller/controllerCadastroAluno.php" method="post">
    <h3>Cadastro de notas dos alunos</h3>
    
    
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
      <input placeholder="Insira sua unidade"  name="unidade" type="number" tabindex="4" max="4"  min="1" required>
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
    <a href="../index.php">Voltar</a>
    </fieldset>
  </form>
    </div>
  <div class="container">  
  <form id="contact" action="./CadastrarAlunos.php" method="post">
    <fieldset>
  <input type="text" name="pesquisa" placeholder="Pesquise o aluno"  tabindex="6"  maxlenght="14">
    </fieldset>
    <fieldset>
      <button value="buscar" type="submit" id="contact-submit">Buscar</button>
    </fieldset>
   
    <form id="contact">
    <div class="container">  
    <?php
    
                require_once '../model/modelDao/Conexao.php';
                  
                $con = new Conexao();
                
                $Pesquisa = filter_input(INPUT_POST,'pesquisa');
                
                $query = $con->conectar()->prepare("select * from notas where nome = :nome");
                
                $query->bindValue(":nome" , $Pesquisa);
                
                 $query->execute();  


                 $result = $query->fetchAll();//convertendo querry em strinfg

                 foreach ($result as $value ){
                     echo "Nota: ".$value['nota']."<br><br>";
                     echo "Nome: ".$value['nome']."<br><br>";
                     echo "Unidade: ".$value['unidade']."<br><br>";
                     echo "Matéria: ".$value['materia']."<br><br>";
                     echo "Série: ".$value['serie']."<br><br>";
                    
                     
                 }
            
            ?>
    </div>
    </form>
    </body>
    </html>