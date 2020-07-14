<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_index.css">
        <meta http-equiv=�Content-Type� content=�text/html; charset=utf-8?>
        <title>Cadastro de notas dos alunos</title>
    </head>
   <body>
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
             <fieldset>
    <a href="./inicial.php">Voltar</a>
    </fieldset>
    </div>
    </form>
    </body>
    </html>