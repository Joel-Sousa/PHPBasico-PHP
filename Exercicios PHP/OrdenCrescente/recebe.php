<?php
$nmr1=$_POST["numero1"];
$nmr2=$_POST["numero2"];
$nmr3=$_POST["numero3"];

$ary=array($nmr1,$nmr2,$nmr3);
sort($ary);
for($x=0;$x<3;$x++){
    echo $ary[$x],"-";   
}

if($nmr1<$nmr2 and $nmr2<$nmr3){
    echo $nmr1,"-",$nmr2,"-",$nmr3;
}elseif($nmr3<$nmr2 and $nmr2<$nmr1){
    echo $nmr3,"-",$nmr2,"-",$nmr1;
}elseif($nmr1<$nmr3 and $nmr3<$nmr2){
    echo $nmr1,"-",$nmr3,"-",$nmr2;
}elseif($nmr3<$nmr1 and $nmr1<$nmr2){
    echo $nmr3,"-",$nmr1,"-",$nmr2;
}elseif($nmr2<$nmr1 and $nmr2<$nmr3){
    echo $nmr2,"-",$nmr3,"-",$nmr1;
}elseif($nmr2<$nmr1 and $nmr2<$nmr3){
    echo $nmr2,"-",$nmr3,"-",$nmr1;
}
?>

