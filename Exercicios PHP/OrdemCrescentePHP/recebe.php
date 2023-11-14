<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
$vlr3=$_POST["valor3"];

$ary=array($vlr1,$vlr2,$vlr3);
sort($ary);
for($x=0;$x<3;$x++){
    echo $ary[$x]," ";
}
?>
