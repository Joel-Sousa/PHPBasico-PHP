<?php

$lista = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];
$quantidade = count($lista);
echo $quantidade;
echo "<br>";

for($x=0;$x<$quantidade;$x++){
    echo $x, " : ", $lista[$x];
    echo "<br>";
}
?>
