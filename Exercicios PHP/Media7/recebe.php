<?php
$vlr1=$_POST["valor1"];
$vlr2=$_POST["valor2"];
$vlr3=$_POST["valor3"];
$vlr4=$_POST["valor4"];
$md=($vlr1+$vlr2+$vlr3+$vlr4)/4;
if($md>7){
    echo "O aluno esta aprovado com media maior que 7.= ",$md;
}else{
    echo "O aluno esta reprovado com media menor que 7.= ",$md;
}

?>