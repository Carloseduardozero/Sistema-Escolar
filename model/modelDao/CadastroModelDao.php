<?php

(stream_resolve_include_path("Cadastro"));
(stream_resolve_include_path("Conexao.php"));

class CadastroModelDao {

    private $obj;
    private $con;

    function __construct() {
        $this->obj = new Cadastro();
        $this->con = new Conexao();
    }

    public function insert($con, $obj) {

        $query = $con->conectar()->prepare("select ID from usuario where usuario = :u");

        $query->bindValue(":u", $obj->getUsuario());

        $query->execute();

        if ($query->rowCount() > 0) {

            return false;
        } else {

            $query = $con->conectar()->prepare("insert into usuario (usuario,senha)values(:usuario,:senha)");

            $query->bindValue(":usuario", $obj->getUsuario());
            $query->bindValue(":senha", $obj->getSenha());
            $query->execute();
            return true;
        }
    }

}
