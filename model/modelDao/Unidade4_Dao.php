<?php
(stream_resolve_include_path("Unidade4_bean.php"));
(stream_resolve_include_path("Conexao.php"));


class Unidade4_Dao{

  private $obj;
  private $con;

  function __construct() {
    $this-> obj = new Unidade4_bean();
    $this-> con = new Conexao();
}
public function insert($con,$obj) {

$query = $con->conectar()->prepare("select id_quarta from unidade4 where nome = :e");
$query->bindValue(":e" ,$obj->getNome());
 $query->execute();
 if($query->rowCount() > 0){
   
     return false;
 }else{
  $query = $con->conectar()->prepare("insert into unidade4 (nota,materia,serie,nome)values(:nota,:materia,:serie,:nome)");

  $query->bindValue(":nota", $obj->getNota());

  $query->bindValue(":materia", $obj->getMateria());
  $query->bindValue(":serie", $obj->getSerie());
  $query->bindValue(":nome", $obj->getNome());
 
  $query->execute();   return true;
  
  
 }
}
 
  
  
}

