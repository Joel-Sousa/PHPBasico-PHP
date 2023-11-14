
<?php
$n1=$_POST["n1"];
$i1=$_POST["i1"];

$n2=$_POST["n2"];
$i2=$_POST["i2"];

$n3=$_POST["n3"];
$i3=$_POST["i3"];

$n4=$_POST["n4"];
$i4=$_POST["i4"];

$n5=$_POST["n5"];
$i5=$_POST["i5"];

$n6=$_POST["n6"];
$i6=$_POST["i6"];

$n7=$_POST["n7"];
$i7=$_POST["i7"];

$n8=$_POST["n8"];
$i8=$_POST["i8"];

$n9=$_POST["n9"];
$i9=$_POST["i9"];

$n10=$_POST["n10"];
$i10=$_POST["i10"];

$aryn=array(1=>$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);
$aryi=array(1=>$i1,$i2,$i3,$i4,$i5,$i6,$i7,$i8,$i9,$i10);

for($i=1;$i<=10;$i++){
     
    //echo "Nome:",$aryn[$i],"<br>","Idade;",$aryi[$i],"<br>";

    $nom=$aryn[$i];
    $ida=$aryi[$i];
    
    //echo "Nome:",$nom,"<br>","Idade:",$ida,"<br>";
    
    if($ida>=18){
        echo "Nome:",$nom,"<br>","Idade:",$ida,"<br>";
    }
}

?>