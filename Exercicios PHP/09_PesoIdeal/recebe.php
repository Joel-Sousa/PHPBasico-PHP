<?php
$alt=$_POST["altura"];
$sex=$_POST["sexo"];
if($sex=="m"){
    $rsp=(72.7*$alt)-58;
    echo "O peso ideal e: ",$rsp;
}else {
 $rsp=(62.1*$alt)-44.7;
    echo "O peso ideal e: ",$rsp;   
}
?>

