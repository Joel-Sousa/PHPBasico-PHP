<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
$sm=$vlr1+$vlr2;
$sbt=$vlr1-$vlr2;
$mtp=$vlr1*$vlr2;
$dvs=$vlr1/$vlr2;
echo "Soma de: ",$vlr1,"+",$vlr2,"=",$sm,"<br>";
echo "Subtraçao de: ",$vlr1,"-",$vlr2,"=",$sbt,"<br>";
echo "Multiplicaçao de: ",$vlr1,"*",$vlr2,"=",$mtp,"<br>";
echo "Divisao de: ",$vlr1,"/",$vlr2,"=",$mtp,"<br>";
?>