<?php
$nm=$_POST["aluno"];
$nda=$_POST["aulas"];
$nt1=$_POST["nota1"];
$nt2=$_POST["nota2"];
$nt3=$_POST["nota3"];
$nt4=$_POST["nota4"];
$rst=($nt1+$nt2+$nt3+$nt4)/4;
if($nda>=160){
 if($rst>=7){
     echo "Aluno: ",ucfirst($nm),
          " aprovado por media maior que 7 Total: ",$rst," e frequencia de: ",$nda," Aulas.";
 }else{
     echo "Aluno: ",ucfirst($nm),
          " reprovado por media menor que 7 Total: ",$rst," e frequencia de: ",$nda," Aulas.";
 }   
}else{
    echo "Aluno: ",ucfirst($nm),
         " reprovado por faltas iferior a 160 Total:",$nda,
         " Media: ",$rst;
}
?>