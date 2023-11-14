<?php
$nmr1=$_POST["numero1"];
$nmr2=$_POST["numero2"];
if($nmr1<$nmr2){
    echo $nmr1,"-",$nmr2;
}else{
    echo $nmr2,"-",$nmr1;
}
?>

