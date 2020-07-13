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

     function buscar($con,$obj){

        $query = $con->conectar()->prepare("select * from notas where nome = :nome");
                
                $query->bindValue(":nome" ,$obj->getPesquisa());
                
                 $query->execute();  

$result = $query->fetchAll();//convertendo querry em strinfg

foreach ($result as $value ){
    echo "Nota: ".$value['nota']."<br><br>";
    echo "Nome: ".$value['nome']."<br><br>";
    echo "Unidade: ".$value['unidade']."<br><br>";
    echo "Matéria: ".$value['materia']."<br><br>";
    echo "Série: ".$value['serie']."<br><br>";
   
    
}

     }

}


