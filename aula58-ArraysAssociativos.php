<?php
$pontos = ["joao"=>10, "maria"=>20, "jose"=>30];

echo "joao", " = ", $pontos["joao"],"<br>";
echo "maria", " = ", $pontos["maria"],"<br>";
echo "jose", " =  ", $pontos["jose"],"<br>";
$pontos["jose"] += 1;  
echo $pontos["jose"];
?>