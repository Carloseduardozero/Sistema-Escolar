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

