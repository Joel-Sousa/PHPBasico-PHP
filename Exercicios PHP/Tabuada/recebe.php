
<?php
$num1=$_POST["numero1"]; 

for($i=0;$i<=10;$i++){
    $res=$num1*$i;
    echo $num1,"*",$i,"=";
    echo $res,"<br>";
}
?>