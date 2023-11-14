<?php
$nm=$_POST["nome"];
$fls=$_POST["numero"];
$ms=120.00;
$prc1=10/100;
$prc2=15/100;
$prc3=20/100;
if($fls==1){
    $rst=$ms-($prc1*$ms);
    echo ucfirst($nm)," O desconto e de 10% Total: ",$rst;
}elseif($fls==2 or $fls==3){
    $rst=$ms-($prc2*$ms);
    echo ucfirst($nm)," O desconto e de 15% Total: ",$rst;
}else{
    $rst=$ms-($prc3*$ms);
    echo ucfirst($nm)," O desconto e de 20% Total: ",$rst;
}
?>