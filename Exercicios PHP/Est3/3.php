<?php
require_once '1.php';
require_once '2.php';

class Test{
    public static $propriedade="www.google.com ->GO";
    public static function retornaPropiedade(){
        return self::$propriedade;
    }
    public static function usarMetodoRetorna(){
        return self::retornaPropiedade();
    }
}echo Teste::retornaPropriedade();
Teste::usarMetodoRetorna();
?>
