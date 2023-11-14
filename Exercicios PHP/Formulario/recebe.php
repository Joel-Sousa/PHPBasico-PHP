
<?php
$num1=$_POST["numero1"];
$num2=$_POST["numero2"];
$num3=$_POST["numero3"];
$num4=$_POST["numero4"];
$num5=$_POST["numero5"];
$num6=$_POST["numero6"];
$con=  count(1);

$ary= array(1=>$num1,$num2,$num3,$num4,$num5,$num6);
 echo "Quantidade de pares: ";
for($i=1;$i<=6;$i++){
    
    $res=$ary[$i];
    
    if($res%2==0){
        
        echo count($res),"-";
       
        
    if($res%2==0){
     
    }
    }
}
 echo "<br>";
echo "Numeros de pares: ";
for($i=1;$i<=6;$i++){
    
    $res=$ary[$i];
    if($res%2==0){
        
        echo $res,"-";
     
    }
}

echo "<br>";
 echo "Quantidade de impares: ";
for($i=1;$i<=6;$i++){
    
    $res=$ary[$i];
    
    if($res%2!=0){
        
        echo count($res),"-";
        
    if($res%2==0){
     
    }
    }
}

 echo "<br>";
echo "Numeros de impares: ";
for($i=1;$i<=6;$i++){
    
    $res=$ary[$i];
    if($res%2!=0){
        
        echo $res,"-";
     
    }
}
?>

