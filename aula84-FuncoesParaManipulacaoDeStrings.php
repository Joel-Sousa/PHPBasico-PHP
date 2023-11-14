<?php


$len = strlen("123456abc");
echo "quantidade e: $len";
echo "<br>";

$str = "aaabbbccc";
$sub = substr($str, 3, 3);
echo "retorno e: $sub";
echo "<br>";

$str = "aaabbbccc";
$sub = substr($str,3);
echo "retorno e: $sub";
echo "<br>";

$up = strtoupper("ana");
echo "Maiusculas $up";
echo "<br>";

$down = strtolower("CRIS");
echo "Minusculas: $down";

$str = "aaabbbccc";
$nova = str_replace("bbb", "---", $str);

echo "nova string: $nova";
?>


