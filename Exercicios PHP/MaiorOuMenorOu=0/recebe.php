<?php
$vlr=$_POST["valor"];
if($vlr>0){
    echo $vlr," O valor e Maior que 0.";
}elseif($vlr<0){
    echo $vlr," O Valor e Menor que 0";
}else{
    echo "O Valor e 0";
}
?>