
<?php
$f1=$_POST["f1"];
$f2=$_POST["f2"];
$f3=$_POST["f3"];
$f4=$_POST["f4"];
$f5=$_POST["f5"];
$ins=8.0/100;
$ri=10.0/100;
$res=0.5/100;


$fs=array(1=>$f1,$f2,$f3,$f4,$f5);

for($i=1;$i<=5;$i++){
    
    $x=$fs[$i];
    $y=$x-$ins;
    $z=$y-$ri;
    $w=$z-$res;
   
    echo $i,"º","Salario = ","$fs[$i]"," -INSS ",$ins," -RI ",$ri," -Sind ",$res," = ",$w,"<br>";
    
}
?>

