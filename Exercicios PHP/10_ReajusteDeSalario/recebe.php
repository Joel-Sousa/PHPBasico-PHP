<?php
$slr=$_POST["salario"];
if($slr<=300){
    $rst=$slr*1.50;
    echo "O salario reajustado e: ",$rst;
}else{
    $rst=$slr*1.30;
    echo "O salario reajustado e: ",$rst;
}
?>

