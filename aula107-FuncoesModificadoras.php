<?php

class Pessoa{
    private $nome;
    private $sobrenome;
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getNomeCompleto(){
        //return $this->getNome(). " " . $this->getSobrenome();
        return $this->getNome()." ".$this->getSobrenome();
    }
    public function PFisica(){
        return "Pessoa fisica: {$this->nome} {$this->sobrenome}";
    }
}
$p1 = new Pessoa();
$p1 ->setNome("joel");
$p1 ->setSobrenome("sousa");

//echo $p1->getNome(),"<br>";
//echo $p1->getSobrenome(), "<br>";
//echo $p1->getNomeCompleto(),"<br>";
echo $p1 ->PFisica();