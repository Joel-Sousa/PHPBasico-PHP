<?php

class Pessoa{
    
    public $idade = 0;
    
    public function getIdade(){
        return $this->idade;
    }
}
$p1 = new Pessoa();
echo $p1 ->getIdade();