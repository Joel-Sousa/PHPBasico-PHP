<?php
$vlr=$_POST["valor"];
$sx=$_POST["sexo"];
if($sx=="m"){
    $rsp=(72.7*$vlr)-58;
    echo $rsp;
}else{
    $rsp=(62.1*$vlr)-44.7;
    echo $rsp;
}
?>