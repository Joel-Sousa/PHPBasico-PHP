<?php
$vlr=$_POST["valor"];
$ns=69;
if($vlr>$ns){
    echo "O numero e Menor que: ",$vlr;
}elseif($vlr<$ns){
    echo "O numero e Maior que: ",$vlr;
}else{
    echo "Acertou o numero ele e: ",$ns;
}
?>