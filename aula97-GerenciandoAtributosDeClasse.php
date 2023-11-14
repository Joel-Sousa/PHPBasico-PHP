<?php
class Pessoa{
    public $idade = 0;
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        if($idade > 0){
        $this->idade = $idade;
        }else{
            echo "A idade informada e invalida";
        }
    }
    
}
$p1 = new Pessoa();
$p1 ->setIdade(22);
$p1 ->setIdade(-5);

echo "a idade informada e: {$p1->getIdade()}";

?>
