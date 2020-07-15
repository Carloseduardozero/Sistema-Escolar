<?php
(stream_resolve_include_path("Unidade1_bean.php"));
(stream_resolve_include_path("Conexao.php"));


class Unidade1_Dao{

  private $obj;
  private $con;

  function __construct() {
    $this-> obj = new Unidade1_bean();
    $this-> con = new Conexao();
}
public function insert($con,$obj) {

$query = $con->conectar()->prepare("select id_primeira from unidade1 where nome = :e and materia = :m");
$query->bindValue(":e" ,$obj->getNome());
$query->bindValue(":m" ,$obj->getMateria());

 $query->execute();
 if($query->rowCount() > 0){
   
     return false;
 }else{
  $query = $con->conectar()->prepare("insert into unidade1 (nota,materia,serie,nome)values(:nota,:materia,:serie,:nome)");

  $query->bindValue(":nota", $obj->getNota());

  $query->bindValue(":materia", $obj->getMateria());
  $query->bindValue(":serie", $obj->getSerie());
  $query->bindValue(":nome", $obj->getNome());
 
  $query->execute();   return true;
  
  
 }
}
 
  
  
}

