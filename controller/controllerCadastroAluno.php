<?php

// chamando a classes
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/CadastroAluno.php';
require_once '../model/modelDao/CadastroAlunoModelDao.php';


//Pegando as informa��es do input do usuario

$nota = filter_input(INPUT_POST,'nota');
$unidade = filter_input(INPUT_POST,'unidade');
$materia = filter_input(INPUT_POST,'materia');
$serie = filter_input(INPUT_POST,'serie');
$nome = filter_input(INPUT_POST,'nome');



//criando um objeto dessa classe

$obj = new CadastroAluno();
$con = new Conexao();
$sql = new CadastroAlunoModelDao();

//Setando as informa��es para a classe

$obj->setNota($nota);
$obj->setUnidade($unidade);
$obj->setMateria($materia);
$obj->setSerie($serie);
$obj->setNome($nome);


$sql-> insert ($con,$obj);


$situacao =($nota<7) ? "Reprovado" : "Aprovado";

echo "O aluno $nome foi $situacao na matéria de $materia na unidade $unidade com $nota pontos";