<?php

function cubo($num){
    return $num * $num * $num;
}
function teste(){
    return [10,"ola",5.5];
}
function x(){
    return "aa";
}


echo x();
echo "<br>";

var_dump(teste());
echo "<br>";

echo cubo(10.5);