
<?php
$num1=$_POST["numero1"];
$num2=$_POST["numero2"];
$num3=$_POST["numero3"];
$num4=$_POST["numero4"];
$num5=$_POST["numero5"];
$num6=$_POST["numero6"];
$num7=$_POST["numero7"];
$num8=$_POST["numero8"];
$num9=$_POST["numero9"];
$num10=$_POST["numero10"];

$ary=array(1=>$num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10);
echo "Maior valor e: ",max($ary),"<br>";
echo "Menor valor e:",min($ary);
?>
