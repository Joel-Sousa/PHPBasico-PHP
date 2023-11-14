
<?php
//$num1=$_POST["numero1"];
//$num2=$_POST["numero2"];
//$num3=$_POST["numero3"];

$num1=1;
$num2=3;
$num3=2;

if($num1<$num2 and $num2<$num3 and $num1<$num3){
    echo $num1,"-",$num2,"-",$num3;
}elseif($num3<$num1 and $num3<$num2 and $num2<$num1){
    echo $num3,"-",$num2,"-",$num1;
}elseif ($num1<$num2 and $num3<$num1 and $num3<$num2){
     echo $num3,"-",$num1,"-",$num2;
}else{
    echo $num1,"-",$num3,"-",$num2;
}
?>
