<?php

// chamando a classes
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Cadastro.php';
require_once '../model/modelDao/CadastroModelDao.php';

//criando um objeto dessa classe

$obj = new Cadastro();
$con = new Conexao();
$sql = new CadastroModelDao();

//Pegando as informações do input do usuario

$usuario = filter_input(INPUT_POST,'usuario');
$senha = filter_input(INPUT_POST,'senha');

//Setando as informações para a classe

$obj->setUsuario($usuario);
$obj->setSenha($senha);


$sql->insert($con,$obj);

header("location: ../view/Cadastrar.php");


