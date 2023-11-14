<?php
$nmr1=$_POST["numero1"];
$nmr2=$_POST["numero2"];
$r=0;
for($x=1;$x<=$nmr1;$x++){
    $r+=$nmr2;
    echo $r," ";
}
?>
