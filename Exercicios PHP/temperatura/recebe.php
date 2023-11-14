
<?php
$temp1=$_POST["temperatura1"];
$temp2=$_POST["temperatura2"];
$temp3=$_POST["temperatura3"];
$temp4=$_POST["temperatura4"];
$temp5=$_POST["temperatura5"];
$temp6=$_POST["temperatura6"];
$temp7=$_POST["temperatura7"];
$temp8=$_POST["temperatura8"];
$temp9=$_POST["temperatura9"];
$temp10=$_POST["temperatura10"];
$temp11=$_POST["temperatura11"];
$temp12=$_POST["temperatura12"];

$ary=array(1=>$temp1,$temp2,$temp3,$temp4,$temp5,$temp6,$temp7,$temp8,$temp9,$temp10,$temp11,$temp12);

for($i=1;$i<=12;$i++){
    
    $arys=$ary[$i];
    //echo $ary[$i],"-";
    
}
echo "A maior temperatura e: ",max($ary),"<br>";

echo "A menor temperatura e: ",min($ary),"<br>";


?>

