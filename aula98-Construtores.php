<?php

class Pessoa{
    public $idade = 0;
    public $nome;
    
    public function __construct() {
        echo "<br>teste<br>";
        var_dump($this);
    }
}
//echo "<pre>";
$p1 = new Pessoa();
$p2 = new Pessoa();
echo "</pre>";


