<?php

$num1 =100;
$num2 =200;

$funcao = function ()use (&$num1,$num2){
    echo "Anonima: ", $num1,"<br>";
    $num1 = 1000;
};

echo $funcao();

echo $num1;
