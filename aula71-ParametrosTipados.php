<?php

function getArea($x,$y){
    return $x * $y;
}

function getSum(...$valores){
    return array_sum($valores);
}
echo getArea("10", 5);
echo "<br>";
echo getSum(1,2,3,4,5,6,"100");