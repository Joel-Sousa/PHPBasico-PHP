<?php

$teste = "alo";
$x = 10;
$y = 5;

function estudoEscopo(){
    echo $GLOBALS["x"];
    echo "<br>";
    echo $GLOBALS["y"];
}

estudoEscopo();
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
