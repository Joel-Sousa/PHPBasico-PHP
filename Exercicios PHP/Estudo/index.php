<!--
<?php
$a = 10;
$A = 20;
echo "O valor de 'a' é $a e o de 'A' é $A";
?>
-->

<!--
<?php
$valor1 = false;
$valor2 = false;
$valor3 = true;
if ($valor1) {
if ($valor2) {
echo 'teste';
} else {
if ($valor3) {
echo 'valor';
}
}
} else {
echo 'frase';
}
?>
-->

<!--
<?php
$valor1 = false;
$valor2 = false;
$valor3 = true;
7
if ($valor1) {
if ($valor2) {
echo 'teste';
} else {
if ($valor3) {
echo 'valor';
}
}
} else {
echo 'frase';
}
?>
-->

<!--
<?php
$valor1 = false;
$valor2 = false;
$valor3 = true;
8
if ($valor1) {
if ($valor2) {
echo 'teste';
} else {
if ($valor3) {
echo 'valor';
}
}
} else {
echo 'frase';
}
?>
-->

<!--
<?php
$teste = "Mauricio";
$vivas = '---$teste--\n';
echo "$vivas";
?>
A saída desse script será "---$teste--\n".
<?php
$teste = "Mauricio";
$vivas = "---$teste---\n";
echo "$vivas";
?>
-->

<!--
<?php
$cor[1] = “vermelho”;
$cor[2] = “verde”;
$cor[3] = “azul”;
$cor[“teste”] = 1;
?>
-->

<!--
<?php
$cor = array(1 => “vermelho”, 2 => “verde”, 3 => “azul”, “teste” => 1);
?>
-->

<!--
<?php
$nota1 = 10;
$nota2 = 5;
$nota3 = 7;
$nota4 = 7;
$nota5 = 3;
echo 'A nota 1 é' . $nota1 . '<br>';
echo 'A nota 2 é' . $nota2 . '<br>';
echo 'A nota 3 é' . $nota3 . '<br>';
echo 'A nota 4 é' . $nota4 . '<br>';
echo 'A nota 5 é' . $nota5 . '<br>';
?>
-->

<!--
<?php
$nota = array();
$nota[1] = 10;
$nota[2] = 5;
$nota[3] = 7;
$nota[4] = 7;
$nota[5] = 3;
echo 'A nota 1 é' . $nota[1] . '<br>';
echo 'A nota 2 é' . $nota[2] . '<br>';
echo 'A nota 3 é' . $nota[3] . '<br>';
echo 'A nota 4 é' . $nota[4] . '<br>';
echo 'A nota 5 é' . $nota[5] . '<br>';
?>
-->

<!--
<?php
$nota = array();
$nota[1] = 10;
$nota[2] = 5;
$nota[3] = 7;
$nota[4] = 7;
$nota[5] = 3;
for ( $indice = 1 ; $indice <= 5 ; $indice++ ) {
echo 'A nota ' . $indice . ' é' . $nota[$indice] . '<br>';
}
?>
-->

<!--
<?php
$pessoa = array();
$pessoa['nome'] = 'Edgar Ferreira da Silva' ;
$pessoa['idade'] = 23;
$pessoa['sexo'] = 'masculino';
echo 'Meu nome é ' . $pessoa['nome'] . '. Sou do sexo ' . $pessoa['sexo'] . '
e tenho ' . $pessoa['idade'] . ' anos.';
?>
-->

<!--
<?php
$nota = array( 10, 5, 7, 7, 3 );
for ( $indice = 0 ; $indice < 5 ; $indice++ ) {
echo 'A nota ' . $indice . ' é' . $nota[$indice] . '<br>';
}
?>
-->

<!--
<?php
$nota = array( 1 => 10, 2 => 5, 3 => 7, 4 => 7, 5 => 3 );
for ( $indice = 1 ; $indice <= 5 ; $indice++ ) {
echo 'A nota ' . $indice . ' é' . $nota[$indice] . '<br>';
}
?>
-->

<!--
<?php
$nota = array( 1 => 10, 5, 7, 7, 3 );
for ( $indice = 1 ; $indice <= 5 ; $indice++ ) {
echo 'A nota ' . $indice . ' é' . $nota[$indice] . '<br>';
21
}
?>
-->

<!--
<?php
$pessoa = array('nome' => 'Edgar Ferreira da Silva', 'idade' => 23, 'sexo' =>
'masculino');
echo 'Meu nome é ' . $pessoa['nome'] . '. Sou do sexo ' . $pessoa['sexo'] . '
e tenho ' . $pessoa['idade'] . ' anos.';
?>
-->

<!--
<?php
$nota = array();
$nota[] = 10;
$nota[] = 5;
$nota[] = 7;
$nota[] = 7;
$nota[] = 3;
for ( $indice = 0 ; $indice < 5 ; $indice++ ) {
echo 'A nota ' . $indice . ' é' . $nota[$indice] . '<br>';
}
?>
-->

<!--
<?php
$lista = array('Maria', 'Carlos', 'Edgar');
$idade = array(50, 60, 23);
for ($i = 0; $i < 3; $i++) {
echo 'Posição: ' . $i . ' Nome: ' . $lista[$i] . ' Idade: ' . $idade[$i]
.'<br />';
}
?>
-->

<!--
<?php
/**
* Inicialização da variável $lista indicando que é um array, porém,
unidimensional
*/
$lista = array();
/**
* Na primeira linha, vários nomes, o que exige guardar como um array
*/
$lista[] = array('Maria', 'Carlos', 'Edgar');
/**
* Na segunda linha, várias idades, o que exige guardar como um array
*/
$lista[] = array(50, 60, 23);
echo $lista[0][0]; //imprimindo a primeira linha e a primeira coluna
echo '<br />';
echo $lista[0][1]; //imprimindo a primeira linha e a segunda coluna
echo '<br />';
echo $lista[0][3]; //imprimindo a primeira linha e a terceira coluna
echo '<br />';
24
echo $lista[1][0]; //imprimindo a segunda linha e a primeira coluna
echo '<br />';
echo $lista[1][1]; //imprimindo a segunda linha e a segunda coluna
echo '<br />';
echo $lista[1][3]; //imprimindo a segunda linha e a terceira coluna
echo '<br />';
?>
-->

<!--
<?php
$lista = array( array('Maria', 'Carlos', 'Edgar'), array(50, 60, 23) );
echo $lista[0][0]; //imprimindo a primeira linha e a primeira coluna
echo '<br />';
echo $lista[0][1]; //imprimindo a primeira linha e a segunda coluna
echo '<br />';
echo $lista[0][3]; //imprimindo a primeira linha e a terceira coluna
echo '<br />';
echo $lista[1][0]; //imprimindo a segunda linha e a primeira coluna
25
echo '<br />';
echo $lista[1][1]; //imprimindo a segunda linha e a segunda coluna
echo '<br />';
echo $lista[1][3]; //imprimindo a segunda linha e a terceira coluna
echo '<br />';
?>
-->

<!--
<?php
define("_2nome_da_constante", "valor da constante");
echo _2nome_da_constante;
?>
Já a constante abaixo seria inválida:
<?php
define("2nome_da_constante", "valor da constante");
echo 2nome_da_constante;
?>
-->

<!--
<?php
$nota = 10;
if ($nota >= 8) {
echo 'Muito boa';
} else {
echo 'Precisa melhorar';
}
?>
-->

<!--
<?php
$nota = 10;
if (!$nota >= 8) {
echo 'Muito boa';
} else {
echo 'Precisa melhorar';
}
40
?>
-->

<!--
<?php
$nota1 = 10;
$nota2 = 10;
if ($nota1 >= 8 || $nota2 >= 8) {
echo 'Passou de ano';
} else {
echo 'Precisa melhorar';
}
?>
-->

<!--
<?php
$nota1 = 10;
$nota2 = 10;
if ($nota1 >= 8 && $nota2 >= 8) {
echo 'Passou de ano';
} else {
echo 'Precisa melhorar';
}
?>
-->

<!--
<?php
$carro = 'sim';
$casa = 'sim';
42
if ($carro == 'sim' xor $casa == 'sim') {
echo 'Você ganhou o prêmio';
} else {
echo 'Você não ganhou o prêmio';
}
?>
-->

<!--
<?php
$situacao = "S";
if ($situacao == "S") {
echo "Solteiro";
} elseif ($situacao == "C") {
echo "Casado";
} elseif ($situacao == "D") {
echo "Divorciado";
49
} elseif ($situacao == "J") {
echo "Separado";
} elseif ($situacao == "A") {
echo " Amizade ";
} else {
echo "Situação inválida";
}
?>
-->

<!--
<?php
$situacao = "S";
switch ($situacao) {
case "S" :
echo "Solteiro";
break;
case "C" :
echo "Casado";
break;
case "D" :
echo "Divorciado";
break;
case "J" :
echo "Separado";
break;
case "A" :
echo "Amizade";
break;
51
default :
echo "Situação Inválida";
}
?>
-->

<!--
<?php
$nota = 10;
switch ($nota) {
case 10 :
echo "Excelente";
break;
case 9 :
echo "Excelente";
break;
case 8 :
echo "Boa";
break;
case 7 :
echo "Regular";
break;
case 6 :
echo "Regular";
break;
case 5 :
52
echo "Regular";
break;
default :
echo "Ruim";
}
?>
-->

<!--
<?php
$nota = 10;
switch ($nota) {
case 10 :
case 9 :
echo "Excelente";
break;
case 8 :
echo "Boa";
break;
case 7 :
case 6 :
case 5 :
echo "Regular";
break;
default :
echo "Ruim";
}
?>
-->

<!--
<?php
$i = 0;
while ( $i < 10 ) {
echo echo "O contador vale: " . $i . "<br />";
$i++;
}
?>
-->

<!--
<?php
$i = 0;
do {
echo echo "O contador vale: " . $i . "<br />";
$i++;
} while ( $i < 10 );
?>
-->

<!--
<?php
57
for ( $i = 0 ; $i < 10 ; $i++ ) {
echo "O contador vale: " . $i . "<br />";
}
?>
-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->

<!--

-->
