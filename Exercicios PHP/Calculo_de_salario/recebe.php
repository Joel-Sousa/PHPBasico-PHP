
<?php
$nome=$_POST["nome"];
$turno=$_POST["turno"];

if($turno=="manha"){
    
    echo $nome," R$:450,00";
}else if($turno=="tarde"){
    
    echo $nome," R$:490,00";
}else{
    echo $nome," R$:650,00";
}
?>

