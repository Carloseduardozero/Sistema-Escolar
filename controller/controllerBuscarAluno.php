<?php

// chamando a classes
require_once '../model/modelDao/BuscarAlunoDao.php';
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Buscar.php';



//Pegando as informa��es do input do usuario

$pesquisa = filter_input(INPUT_POST,'pesquisa');

//criando um objeto dessa classe
$con = new Conexao();
$sql = new BuscarAlunoDao();
$obj = new Buscar();

//Setando as informa��es para a classe
$obj->setPesquisa ($pesquisa);



?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_index.css">
        <meta http-equiv=�Content-Type� content=�text/html; charset=utf-8?>
        <title>Cadastro de notas dos alunos</title>
    </head>
   <body>
    <div class="container">  
  
  <form id="contact" >
   
    </fieldset>
   
    <form id="contact">
    <div class="container">  
    
             <fieldset>
    <a href="../view/Consulta.php">Voltar</a></br></br>


    <h3>Notas Da Primeira unidade  </h3></br></br>
 <div><p>
 
   <?php
   $sql->buscar1($con,$obj);?>
     </p>

     <h3>Notas Da Segunda unidade  </h3></br></br>
     <?php
   $sql->buscar2($con,$obj);?>
     </p>

     <h3>Notas Da Terceira unidade  </h3></br></br>
     <?php
   $sql->buscar3($con,$obj);?>
     </p>

     <h3>Notas Da Quarta unidade  </h3></br></br>
     <?php
   $sql->buscar4($con,$obj);?>
     </p>

     



     </div>
    </fieldset>
    </div>
    </form>
    </body>
    </html>
