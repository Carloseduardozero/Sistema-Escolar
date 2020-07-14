<?php

// chamando a classes
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Unidade3_bean.php';
require_once '../model/modelDao/Unidade3_Dao.php';


//Pegando as informa��es do input do usuario

$nota = filter_input(INPUT_POST,'nota');
$materia = filter_input(INPUT_POST,'materia');
$serie = filter_input(INPUT_POST,'serie');
$nome = filter_input(INPUT_POST,'nome');



//criando um objeto dessa classe

$obj = new Unidade3_bean();
$con = new Conexao();
$sql = new Unidade3_Dao();

//Setando as informa��es para a classe

$obj->setNota($nota);
$obj->setMateria($materia);
$obj->setSerie($serie);
$obj->setNome($nome);


$sql-> insert ($con,$obj);

header("location: ../View/Unidade3.php");