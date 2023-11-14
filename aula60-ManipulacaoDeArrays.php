<?php

//Verifica a estrutura de um array
echo "Funcao array <br>";
echo "Valor = []", is_array([]),"<br>";
echo "Valor = array()", is_array(array()),"<br>";
echo "Valor = [1,2,3]", is_array([1,2,3]),"<br>";
echo "Valor = 1", is_array(1),"<br><br>";

//Retorna a quantidade de elementos
echo "funçao count<br>";
echo "valor = [1,2,3,4]", count([1,2,3,4]),"<br>";
echo "valor = range(0,1000)", count(range(0, 1000)),"<br><br>";

//Verifica se um valor esta contido em um array
echo "Funcao in_array()","<br>";
echo "valor = in_array(2,[1,2,3,4])",  in_array(2,[1,2,3,4]),"<br>";
echo "valor = in_array(6,[1,2,3,4])",  in_array(6,[1,2,3,4]),"<br><br>";

//ordena um array
echo "funçao sort()<br>";
$arr = ["s","d","t","a "];
sort($arr);
echo "<pre>";
print_r($arr);
echo "<br><br>";

//funçao inversa do array
echo "funçao array_reverse()<br>";
$ary = [4,3,2,1];
$ary = array_reverse($ary);
print_r($ary);

echo "</pre>";

//soma de dois arrays
echo "funçao array_sun";
$ary1 = [1,2,3,4];
echo "A soma e: ", array_sum($ary);
echo "<br><br>";

//soma dois arrays
echo "funcao array_merge";
echo "<pre>";
$ary1 = [1,2];
$ary2 = ["a","b"];
$ars = array_merge($ary1,$ary2);
print_r($ars);
echo "</pre>";



