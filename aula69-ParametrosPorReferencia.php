<?php

$x = [1,2,3];
$y =  & $x;

$x[1] = 5;
echo "<pre>";
print_r($x);
print_r($y);
echo "</pre>";
 