<?php

class Pessoa{
    private $nome;
    public function setNome($nome){
        $this-> nome = $nome;
        
    }
    public function getNome(){
        return $this->nome;
    }
}

$p1 = new Pessoa();
$p1 ->setNome("julia");
$p1->getNome();

//$p1 ->nome = " none";