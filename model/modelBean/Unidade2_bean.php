<?php

class Unidade2_bean{
    
   private $nota;
    private $materia;
    private $serie;
    private $nome;
    
    function getNota() {
        return $this->nota;
    }

      
    function getSerie() {
        return $this->serie;
    }

      
    function getNome() {
        return $this->nome;
    }
    
    function getMateria() {
        return $this->materia;
    }



    function setNota($nota) {
        $this->nota = $nota;
    }

    
    function setSerie($serie) {
        $this->serie = $serie;
    }

    
    function setNome($nome) {
        $this->nome = $nome;
    }

   

    function setMateria($materia) {
        $this->materia = $materia;
    }


}
