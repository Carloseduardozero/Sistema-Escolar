<?php

(stream_resolve_include_path("Usuario.php"));
(stream_resolve_include_path("Conexao.php"));

class UsuarioModelDao {

    private $obj;
    private $con;

    function __construct() {
        $this->obj = new Usuario();
        $this->con = new Conexao();
    }

    function logar($con, $obj) {

        $query = $con->conectar()->prepare("select * from usuario where usuario = :usuario and senha = :senha");

        $query->bindValue(":usuario", $obj->getUsuario());
        $query->bindValue(":senha", $obj->getSenha());

        $query->execute();

        if ($query->rowCount() != 0) {

            $query = $con->conectar()->prepare("select * from usuario where usuario = :usuario and senha = :senha");

            $query->bindValue(":usuario", $obj->getUsuario());
            $query->bindValue(":senha", $obj->getSenha());

            $query->execute();

            if ($query->rowCount() != 0) {
                
         

             header("location: /Sistema-Escolar/view/CadastrarAlunos.php");
             
            }
        } else {
            
            
            header("location: /Sistema-Escolar/index.php");
        }
    }

}
