<?php
(stream_resolve_include_path("CadastroAluno.php"));
(stream_resolve_include_path("Conexao.php"));
(stream_resolve_include_path("CadastroAlunoModelDao.php"));

class CadastroAlunoModelDao{

  private $obj;
  private $con;

  function __construct() {
    $this-> obj = new CadastroAluno();
    $this-> con = new Conexao();
}
public function insert($con,$obj) {

$query = $con->conectar()->prepare("select id from notas where nota = :e");
$query->bindValue(":e" ,$obj->getNota());
 $query->execute();
 if($query->rowCount() > 0){
   
     return false;
 }else{
  $query = $con->conectar()->prepare("insert into notas (nota,unidade,materia,serie,nome)values(:nota,:unidade,:materia,:serie,:nome)");

  $query->bindValue(":nota", $obj->getNota());
  $query->bindValue(":unidade", $obj->getUnidade());
  $query->bindValue(":materia", $obj->getMateria());
  $query->bindValue(":serie", $obj->getSerie());
  $query->bindValue(":nome", $obj->getNome());
 
  $query->execute();   return true;
  
  
 }
}
 
  
  
}

