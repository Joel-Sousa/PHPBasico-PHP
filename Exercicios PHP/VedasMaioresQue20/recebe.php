<?php
$vds=$_POST["valor"];
$prc1=10/100;
$prc2=7.5/100;
if($vds>=20.000){
    $rst=$vds+($prc1*$vds);
    echo "O vendedor recebera: ",$rst; 
}else{
    $rst=$vds+($prc2*$vds);
    echo "O vendedor recebera: ",$rst;
}
?>