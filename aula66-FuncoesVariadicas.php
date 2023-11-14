<?php

function media(...$valores){
    $total = array_sum($valores) / count($valores);
    //echo print_r($valores);
    
    //$total = $total / count($valores);
    //$total /= count($valores);
    //echo $total;
    return $total;
    
    
}

echo media(5,5,6);
//media(5,5,6);
