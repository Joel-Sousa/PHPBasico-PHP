<?php
require_once '1.php';
class Teste{
    public static $propriedade = "Esta e uma propiedade estatica";
    
    public static function metodoEstatico(){
        echo "este e um metodo estatico";
    }
}
echo Teste::$propriedade;
Teste::metodoEstatico();
?>