<?php


function somaTudo(){
    $lista = func_get_args();
    $quantidade = func_num_args();
    $total = 0;

//    for($x=0;$x<$quantidade;$x++){
//        $total += $lista[$x];
//    }
    foreach ($lista as $l){
     $total += $l;   
    }
    
    echo "A soma dos parametros e: ", $total;
}

somaTudo(1,2,3,4);
