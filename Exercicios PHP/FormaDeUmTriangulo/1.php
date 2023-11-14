<?php
$lado_A = 2;
$lado_B = 3;
$lado_C = 4;
if(($lado_A < $lado_B + $lado_C) and ($lado_B < $lado_A + $lado_C) and ($lado_C < $lado_A +
$lado_B))
{
echo "Forma um triângulo.";
if(($lado_A == $lado_B) and ($lado_A == $lado_C))
{
echo "Equilátero.";
}
elseif(($lado_A == $lado_B) or ($lado_A == $lado_C) or ($lado_B == $lado_C))
{
echo "Isósceles.";
}
else
echo "Escaleno.";
}
else
echo "Não forma triângulo.";
?>