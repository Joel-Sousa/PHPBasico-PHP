
<?php
$nom=$_POST["nome"];
$fil=$_POST["filhos"];
$val=120.00;

if($fil==1){
    
    $res=$val-(0.1*$val);
    
    echo "O desconto e de 10% : R$:",$res;
    
}else if($fil==2 or $fil==3){
    
    $res=$val-(0.15*$val);
    
    echo "O desconto e de 15% : R$:",$res;
}else{
    
    $res=$val-(0.2*$val);
    
    echo "O desconto e de 20% : R$:",$res;
}
?>

