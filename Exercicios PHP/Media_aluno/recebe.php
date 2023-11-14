
<?php
$nom=$_POST["nome"];
$als=$_POST["aulas"];
$not1=$_POST["nota1"];
$not2=$_POST["nota2"];
$not3=$_POST["nota3"];
$not4=$_POST["nota4"];

if($als>=160){
    
    $res=($not1+$not2+$not3+$not4)/4;
    
    echo "Aprovado","<br>","Nome: ",$nom,"<br>","Numero de aulas: ",$als,"<br>","Media: ",$res;
}else{
    
    $res=($not1+$not2+$not3+$not4)/4;
    
    echo "Reprovado","<br>","Nome: ",$nom,"<br>","Numero de aulas: ",$als,"<br>","Media: ",$res;
}
?>
