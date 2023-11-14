<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
if($vlr1<$vlr2){
    echo $vlr1," ",$vlr2;
}else{
    echo $vlr2," ",$vlr1;
}
?>