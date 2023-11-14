
<?php
$venda=$_POST["venda"];


if($venda>20.000){
    
    $por=$venda*1.10;
    
    echo $por;
}else{
    $pr=$venda*1.075;
    
    
    echo $pr;
}
    
?>
