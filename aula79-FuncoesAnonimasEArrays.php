<?php

$lista = [1,2,3,4,5];

$f = function ($x){
    
return $x * $x; 
};
echo "estrutura array_map()<br>";
$lista_proc = array_map($f,$lista);
print_r($lista_proc);
echo "<br>";
echo "estrutura array_filter()<br>";
$filtro = function ($x){
    return $x < 3;  
};
$lista_filtro = array_filter($lista,$filtro);
print_r($lista_filtro);
