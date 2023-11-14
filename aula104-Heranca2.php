<?php

class SuperClasse{
    public $a = 0;
    
    public function Super(){
        
        echo $this->a;
    }
    
}

class SubClasse extends SuperClasse{
    public $a;
    
    //public function Sub(int $x){
    public function Sub($x){
        $this->a = $x;
    }
}
$sub = new SubClasse();
$sub ->Sub(5);
$sub ->Super();