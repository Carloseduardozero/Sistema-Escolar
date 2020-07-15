<?php

// chamando a classes
require_once '../model/modelBean/Usuario.php';
require_once '../model/modelDao/UsuarioModelDao.php';
require_once '../model/modelDao/Conexao.php';


//criando um objeto dessa classe

$obj = new Usuario();
$con = new Conexao();
$sql = new UsuarioModelDao();

//Pegando as informa��es do input do usuario

$usuario = filter_input(INPUT_POST,'usuario');
$senha = filter_input(INPUT_POST,'senha');

//Setando as informa��es para a classe

$obj->setUsuario($usuario);

$obj->setSenha($senha);

$sql->logar($con, $obj);





//echo $obj->getUsuario();
//$sql->falar($obj);
//echo $usuario ;