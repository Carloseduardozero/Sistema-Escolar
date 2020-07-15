 <?php
(stream_resolve_include_path("Buscar.php"));
(stream_resolve_include_path("Conexao.php"));


class BuscarAlunoDao{

    private $obj;
    private $con;
  
    function __construct() {
      $this-> obj = new Buscar();
      $this-> con = new Conexao();
    }

     function buscar1($con,$obj){

        $query = $con->conectar()->prepare("select * from unidade1 where nome = :nome");
                
                $query->bindValue(":nome" ,$obj->getPesquisa());
                
                 $query->execute();  

$result = $query->fetchAll();//convertendo querry em strinfg

foreach ($result as $value ){
  echo "Nome: ".$value['nome']."<br><br>";
  echo "Nota: ".$value['nota']."<br><br>";
  echo "Matéria: ".$value['materia']."<br><br>";
  echo "Série: ".$value['serie']."<br><br>";
 if($value["nota"]>=6){
   echo "O aluno foi Aprovado na unidade 1 <br><br>";
 }else{
echo"Aluno foi Reprovado na unidade 1 <br><br>";

 }
}

     }

     function buscar2($con,$obj){

      $query = $con->conectar()->prepare("select * from unidade2 where nome = :nome");
              
              $query->bindValue(":nome" ,$obj->getPesquisa());
              
               $query->execute();  

$result = $query->fetchAll();//convertendo querry em strinfg

foreach ($result as $value ){
  echo "Nome: ".$value['nome']."<br><br>";
  echo "Nota: ".$value['nota']."<br><br>";
  echo "Matéria: ".$value['materia']."<br><br>";
  echo "Série: ".$value['serie']."<br><br>";
  if($value["nota"]>=6){
    echo "O aluno foi Aprovado na unidade 2 <br><br>";
  }else{
 echo"Aluno foi Reprovado na unidade 2 <br><br>";
 
  }
 }
   
}

function buscar3($con,$obj){

  $query = $con->conectar()->prepare("select * from unidade3 where nome = :nome");
          
          $query->bindValue(":nome" ,$obj->getPesquisa());
          
           $query->execute();  

$result = $query->fetchAll();//convertendo querry em strinfg

foreach ($result as $value ){
echo "Nome: ".$value['nome']."<br><br>";
echo "Nota: ".$value['nota']."<br><br>";
echo "Matéria: ".$value['materia']."<br><br>";
echo "Série: ".$value['serie']."<br><br>";
if($value["nota"]>=6){
echo "O aluno foi Aprovado na unidade 3 <br><br>";
}else{
echo"Aluno foi Reprovado na unidade 3 <br><br>";

}
}

}

function buscar4($con,$obj){

  $query = $con->conectar()->prepare("select * from unidade4 where nome = :nome");
          
          $query->bindValue(":nome" ,$obj->getPesquisa());
          
           $query->execute();  

$result = $query->fetchAll();//convertendo querry em strinfg

foreach ($result as $value ){
echo "Nome: ".$value['nome']."<br><br>";
echo "Nota: ".$value['nota']."<br><br>";
echo "Matéria: ".$value['materia']."<br><br>";
echo "Série: ".$value['serie']."<br><br>";
if($value["nota"]>=6){
echo "O aluno foi Aprovado na unidade 4 <br><br>";
}else{
echo"Aluno foi Reprovado na unidade 4 <br><br>";

}
}

}
   }

 





