<?php

foreach (range(0, 9, $max) as $v){
    $x = range(0, 9);
    $rel = $v <=> $x;
    
    echo "v=$v <=> x=$x e $rel <br>";
}