<?php //

class SuperClasse{
    public function funcPublic(){echo "funçao publica<br>";}
    private function funcPrivada(){echo "funçao privada<br>";}
    protected function funcProtegida(){echo "funçao protegida<br>";}
    
function Super(){
    $this->funcPublic();
    $this->funcPrivada();
    $this->funcProtegida();
}
}

//$super = new SuperClasse();
//$super ->Super();
//$super ->funcPublic();

//$super ->funcPrivate();
//$super ->funcProtect();

class SubClass extends SuperClasse{
    
    function __construct() {
        $this->funcPublic();
        $this->funcProtegida();
        //$this->funcPrivada();
    }
}

$sub = new SubClass();
//$sub ->Super();
$sub ->funcPublic();
//$sub ->funcPrivate();
//$sub ->funcProtegida();