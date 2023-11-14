<?php
$nmr=$_POST["numero"];
if($nmr>0){
    echo "O numero ",$nmr," e posivo.";
}elseif ($nmr<0) {
    echo "O numero ",$nmr," e negativo.";
}else{
    echo "O numero e 0.";
}
?>
