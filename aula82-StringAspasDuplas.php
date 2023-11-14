<?php

$num = 55;

echo "O  valor da variavel e: $num","<br>";
echo "O  valor da variavel e: ". $num,"<br>";

$arr = ["azul", "amarelo","preto"];

echo "a cor da bola e: $arr[2]<br>";

$a = 10;
$$a = 50;

echo "o valor da variavel \$a e:$a e a de \$\$aa e: ${$a}";
echo "<br>";

${$arr[2]} = "marrom";

echo "var: $arr[1] , ${$arr[2]}";