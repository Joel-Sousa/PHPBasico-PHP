<?php
$nmr1=$_POST["numero1"];
$nmr2=$_POST["numero2"];
if($nmr1<=10 and $nmr2<=10){
    $rsps=(($nmr1*2)+($nmr2*3))/5;
    echo "A resposta e: ",$rsps;
}else{
    echo "Digite um numero de 0 a 10";
}
?>

