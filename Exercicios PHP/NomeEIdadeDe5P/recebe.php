<?php
$nm1=$_POST["nome1"];
$id1=$_POST["idade1"];
$nm2=$_POST["nome2"];
$id2=$_POST["idade2"];
$nm3=$_POST["nome3"];
$id3=$_POST["idade3"];
$nm4=$_POST["nome4"];
$id4=$_POST["idade4"];
$nm5=$_POST["nome5"];
$id5=$_POST["idade5"];

$aryn=array($nm1,$nm2,$nm3,$nm4,$nm5);
$aryi=array($id1,$id2,$id3,$id4,$id5);
for($x=0;$x<5;$x++){
echo "Nome: ",ucfirst($aryn[$x]),"<br>";
    echo "Idade: ",$aryi[$x],"<br>"; 
    echo "<br>";
}
?>