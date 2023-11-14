<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
$vlr3=$_POST["valor3"];
$vlr4=$_POST["valor4"];
$sm=$vlr1+$vlr3;
$mtp=$vlr2*$vlr4;
if($sm<$mtp){
    echo "A soma de A+B e menor que a mutiplicaçao de B*D. ",$sm." ",$mtp;
}elseif($sm>$mtp){
    echo "A soma de A+B e maior que a mutiplicaçao de B*D. ",$sm." ",$mtp;
}else{
    echo "A soma de A+B e igual a mutiplicaçao de B*D. ",$sm." ",$mtp;
}
?>

