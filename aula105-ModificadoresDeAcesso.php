<?php

class SuperClasse{
    public $publico = 0;
    public $privado = 0;
    public $protegido = 0;
    
    public function Super(){
        
        echo $this->publico;
        echo $this->privado;
        echo $this->protegido;
    }
    
}

class SubClasse extends SuperClasse{
    public $publico;
    public $privado;
    public $protegido;
    
    //public function Sub(int $x){
    public function Sub($x){
        $this->publico = $x;
        $this->privado = $x;
        $this->protegido = $x;
    }
}
$sub = new SubClasse();
$sub ->Sub(5);
$sub ->Super();