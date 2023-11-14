<?php

$funcao = function ($nome){
  echo "o nome passado com parametro e: $nome";
    
};

function teste($f){
  $f("joey");
}


echo teste($funcao);
//echo $funcao("joel");