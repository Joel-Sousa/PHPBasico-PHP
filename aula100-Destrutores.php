<?php

class Pessoa{
    
    function __construct() {
        echo "Funçao construtora invocada<br>";
    }
    function __destruct() {
        echo "Funçao destrutora invocada<br>";
    }
}
$p1 = new Pessoa();
unset($p1);
