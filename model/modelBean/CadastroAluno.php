<?php

class CadastroAluno{
    
    private $unidade;
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


    function getUnidade() {
        return $this->unidade;
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

    function setUnidade($unidade) {
        $this->unidade = $unidade;
    }

    function setMateria($materia) {
        $this->materia = $materia;
    }


}
