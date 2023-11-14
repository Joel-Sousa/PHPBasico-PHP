<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
$vlr3=$_POST["valor3"];
$vlr4=$_POST["valor4"];
$vlr5=$_POST["valor5"];
$vlr6=$_POST["valor6"];
$vlr7=$_POST["valor7"];
$vlr8=$_POST["valor8"];
$vlr9=$_POST["valor9"];
$vlr10=$_POST["valor10"];
$vlr11=$_POST["valor11"];
$vlr12=$_POST["valor12"];
$ary=array($vlr1,$vlr2,$vlr3,$vlr4,$vlr5,$vlr6,$vlr7,$vlr8,$vlr9,$vlr10,$vlr11,$vlr12,);

echo "A maior temperatura e: ",max($ary),"<br>";

echo "A menor temperatura e: ",min($ary),"<br>";

?>
