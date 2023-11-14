
<?php
$num1=$_POST["numero1"];
$num2=$_POST["numero2"];
$num3=$_POST["numero3"];
$num4=$_POST["numero4"];
$num5=$_POST["numero5"];

$ary=array(1=>$num1,$num2,$num3,$num4,$num5);
for($i=1;$i<=5;$i++){
    $arys=$ary[$i];
    $imp=$arys%2==0;
if($arys%2==0 ){
     echo $arys," E par.","<br>";   
    }
}
for($i=1;$i<=5;$i++){
    $arys=$ary[$i];
    $imp=$arys%2==0;
    if($arys%2!=0 ){
        echo $arys," E impar.","<br>";
    }
}
?>