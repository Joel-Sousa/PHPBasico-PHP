<?php
$vlr=$_POST["valor"];
if($vlr%2==0){
    echo "O Numero ",$vlr," e Par.";
}else{
    echo "O numero ",$vlr," e Impar.";
}
?>