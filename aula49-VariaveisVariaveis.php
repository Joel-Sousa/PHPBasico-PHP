<?php

$varvar = "Teste";
$$varvar = 10;

echo $Teste;
echo "<br>";
$num = 10;
$$num = 10000;

echo $num;
echo "<br>";
echo $$num;
echo "<br>";
echo $varvar . " " . $$varvar;

?>