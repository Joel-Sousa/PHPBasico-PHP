<?php


class SuperClasse{
    public $a = "variavel \$a";
    
    public function ini(){
        echo "SuperClasse->ini()";
    }
}

class SubClasse extends SuperClasse{
    
}
$sub = new SuperClasse();
//$sub ->