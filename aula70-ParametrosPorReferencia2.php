<?php

function &funcao(){
    $a = [1,2,3];
    print_r($a);
    return $a;
}
$valor = &funcao();
print_r($valor);