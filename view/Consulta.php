<?php

// chamando a classes
require_once '../model/modelDao/BuscarAlunoDao.php';
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Buscar.php';
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
  
  <form id="contact" action="../controller/controllerBuscarAluno.php" method="post">
    <fieldset>
  <input type="text" name="pesquisa" placeholder="Pesquise o aluno"  tabindex="6"  maxlenght="14">
    </fieldset>
    <fieldset>
      <button value="buscar" type="submit" id="contact-submit">Buscar</button>
    </fieldset>
   
    <form id="contact">
    <div class="container">  
    
             <fieldset>
    <a href="./inicial.php">Voltar</a></br></br>
 <div><p>
 
   <?php
   /*
    //Pegando as informa��es do input do usuario

$pesquisa = filter_input(INPUT_POST,'pesquisa');

//criando um objeto dessa classe
$con = new Conexao();
$sql = new BuscarAlunoDao();
$obj = new Buscar();

//Setando as informa��es para a classe
$obj->setPesquisa ($pesquisa);

$sql->buscar($con,$obj);
             
    */ ?>
     </p>
     </div>
    </fieldset>
    </div>
    </form>
    </body>
    </html>