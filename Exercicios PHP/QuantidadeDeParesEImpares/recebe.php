<?php
$nmr1=$_POST["valor1"];
$nmr2=$_POST["valor2"];
$nmr3=$_POST["valor3"];
$nmr4=$_POST["valor4"];
$nmr5=$_POST["valor5"];
$nmr6=$_POST["valor6"];
$ary=array($nmr1,$nmr2,$nmr3,$nmr4,$nmr5,$nmr6);
echo "Quantidade de numeros Pares: ";
for($x=0;$x<6;$x++){
    $ars=$ary[$x];
    if($ars%2==0){
        echo count($ars)," ";        
    }
}
echo "<br>";
echo "Numeros Pares: ";
for($x=0;$x<6;$x++){
    $ars=$ary[$x];
    if($ars%2==0){
        echo $ars," ";        
    }
}
echo "<br>";
echo "Quantidade de numeros Impares: ";
for($x=0;$x<6;$x++){
    $ars=$ary[$x];
    if($ars%2!=0){
        echo count($ars)," ";        
    }
}
echo "<br>";
echo "Numeros Pares: ";
for($x=0;$x<6;$x++){
    $ars=$ary[$x];
    if($ars%2!=0){
        echo $ars," ";        
    }
}

?>