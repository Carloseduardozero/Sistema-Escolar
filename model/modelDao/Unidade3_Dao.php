<?php
(stream_resolve_include_path("Unidade3_bean.php"));
(stream_resolve_include_path("Conexao.php"));


class Unidade3_Dao{

  private $obj;
  private $con;

  function __construct() {
    $this-> obj = new Unidade3_bean();
    $this-> con = new Conexao();
}
public function insert($con,$obj) {

  $query = $con->conectar()->prepare("select id_terceira from unidade3 where nome = :e and materia = :m");
  $query->bindValue(":e" ,$obj->getNome());
  $query->bindValue(":m" ,$obj->getMateria());
  
   $query->execute();
 if($query->rowCount() > 0){
   
     return false;
 }else{
  $query = $con->conectar()->prepare("insert into unidade3 (nota,materia,serie,nome)values(:nota,:materia,:serie,:nome)");

  $query->bindValue(":nota", $obj->getNota());

  $query->bindValue(":materia", $obj->getMateria());
  $query->bindValue(":serie", $obj->getSerie());
  $query->bindValue(":nome", $obj->getNome());
 
  $query->execute();   return true;
  
  
 }
}
 
  
  
}

