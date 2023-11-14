<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
$vlr3=$_POST["valor3"];
$vlr4=$_POST["valor4"];
$vlr5=$_POST["valor5"];
$ary=array($vlr1,$vlr2,$vlr3,$vlr4,$vlr5);
for($x=0;$x<5;$x++){
    $ars=$ary[$x];
    if($ars%2==0){
        echo $ars," ";
}
}
?>
