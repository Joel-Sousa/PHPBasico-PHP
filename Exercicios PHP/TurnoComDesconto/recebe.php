<?php
$nm=$_POST["nome1"];
$trn=$_POST["turno"];
if($trn=="manha"){
    echo "O Salario de ",ucfirst($nm)," e: R$ 450,00";
}elseif($trn=="tarde"){
    echo "O Salario de ",ucfirst($nm)," e: R$ 490,00";
}else{
    echo "O Salario de ",ucfirst($nm)," joele: R$ 650,00";
}
?>
