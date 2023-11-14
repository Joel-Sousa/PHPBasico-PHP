
<?php
$nmr1=$_POST["numero1"];
$nmr2=$_POST["numero2"];
if($nmr1<=10 and $nmr2<=10){
$rpst=($nmr1+$nmr2)/2;
echo "A media das notas e: ",$rpst;
}else{
    echo "Digite um numero de 0 a 10.";
}
?>